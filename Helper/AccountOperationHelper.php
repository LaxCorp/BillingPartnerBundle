<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Account;
use LaxCorp\BillingPartnerBundle\Model\AccountOperation;
use LaxCorp\BillingPartnerBundle\Model\AccountRefill;
use LaxCorp\BillingPartnerBundle\Model\PageResult;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\DBAL\Types\Type;
use App\DBAL\Types\BillJsonArrayType;
use App\DBAL\Types\TimestampMillsType;

/**
 * НЕДОДЕЛАНО
 *
 * @inheritdoc
 */
class AccountOperationHelper extends BaseHelper
{

    const PATH = '/partner/reports/accountoperation';

    /**
     * @var string
     */
    public $class = AccountOperation::class;

    private $container;

    public function __construct(RestHelper $restHelper, MappingHelper $mappingHelper, ContainerInterface $container)
    {
        $this->container = $container;
        parent::__construct($restHelper, $mappingHelper);
    }

    /**
     * @inheritdoc
     */
    public function getAccountOperation(Account $account, int $page = 0, array $filter = [], int $itemsPerPage)
    {

        $pageResult = new PageResult();

        $searchQuery = new SearchQuery();
        $searchQuery->setSearch('account.id:' . $account->getId());
        $searchQuery->setSize($itemsPerPage);
        $searchQuery->setPage($page);
        $searchQuery->setSort('id,desc');

        $filter_operation = (isset($filter['operation'])) ? $filter['operation'] : null;
        if (!is_null($filter_operation) && !empty($filter_operation)) {
            $searchQuery->setSearch($searchQuery->getSearch() . ',reason:' . $filter_operation);
        }

        $hour24 = 24 * 60 * 60;

        $filter_periodFrom = (isset($filter['periodFrom'])) ? $filter['periodFrom'] : null;
        if (!is_null($filter_periodFrom) && !empty($filter_periodFrom)) {
            $searchQuery->setSearch(
                $searchQuery->getSearch() . ',created>'
                . $this->timeToLong($filter_periodFrom->getTimestamp())
                );
        }

        $filter_periodTo = (isset($filter['periodTo'])) ? $filter['periodTo'] : null;
        if (!is_null($filter_periodTo) && !empty($filter_periodTo)) {
            $searchQuery->setSearch(
                $searchQuery->getSearch() . ',created<'
                . $this->timeToLong($filter_periodTo->getTimestamp() + $hour24)
            );
        }

        $pageResult->setCount($this->getCount($searchQuery));

        if (!$pageResult->getCount()) {
            return $pageResult;
        }

        $pages = $pageResult->getCount() / $itemsPerPage;

        if ($pages > 1) {
            $pages_count = ceil($pages);
            for ($i = 0; $i < $pages_count; $i++) {
                $pageResult->addPages($i + 1);
            }
        }

        $pageResult->setItems($this->find($searchQuery));

        return $pageResult;

    }

    /**
     * @param array $order
     *
     * @return string
     */
    public function createSort($order = [])
    {
        $sort      = '';
        $separator = '';
        foreach ($order as $orderField => $direction) {
            $sort      .= $separator . $orderField . ',' . mb_strtolower($direction);
            $separator = '|';
        }

        return $sort;
    }

    /**
     * @param EntityRepository $repository
     * @param array            $fields
     *
     * @return string
     */
    public function createSearch(EntityRepository $repository, $fields = [])
    {
        $search = [];

        /** @var EntityManager $manager */
        $manager = $this->container->get('doctrine')->getManager();

        /** @var ClassMetadata $classMetadata */
        $classMetadata = $manager->getClassMetadata($repository->getClassName());

        foreach ($fields as $field => $value) {
            $real_filed = $field;
            $field      = explode('.', $real_filed)[0];

            $field_arr = null;

            if (is_array($field)) {
                $field_arr = $field;
                $field     = $field_arr[0];
            }

            if ($classMetadata->hasField($field)) {
                $fieldType = $classMetadata->getTypeOfField($field);
                $type      = Type::getType($fieldType);

                $operator  = null;

                $values = $this->getValues($value);
                foreach ($values as $mvalue) {
                    list($operator, $value) = $this->separateOperator($mvalue);
                    $search[] = $this->andWhere($operator, $real_filed, $type, $value);
                }

            }
        }

        return implode(',', $search);
    }

    /**
     * @param $operator
     * @param $field
     * @param $type
     * @param $value
     *
     * @return string
     */
    private function andWhere($operator, $field, $type, $value)
    {
        $search = '';
        // if enum type
        if ($type instanceof DecimalType) {

            $value = (double)$value;

            if ($operator === 'CONTAINS') {
                $operator = 'EQ';
            }
            if ($operator === 'LTE') {
                $operator = 'LT';
                $value    += 0.1;
            }
            if ($operator === 'GTE') {
                $operator = 'GT';
                $value    -= 0.1;
            }

        }

        if ($type instanceof IntegerType || $type instanceof BillJsonArrayType) {
            if ($operator === 'CONTAINS') {
                $operator = 'EQ';
                $value = (integer)$value;
            }

        }

        if ($type instanceof TimestampMillsType) {
            $dateTime  = $this->toLocalDateTime($value);
            $timestamp = $dateTime->getTimestamp();
            $value     = $timestamp * 1000;

            if ($operator === 'CONTAINS') {
                $operator = 'EQ';
            }

            if ($operator === 'LTE') {
                $operator = 'LT';
                $value    += 1;
            }
            if ($operator === 'GTE') {
                $operator = 'GT';
                $value    -= 1;
            }
        }

        if ($operator == 'CONTAINS') {
            $search .= $field . ':*' . $value . '*';

        } elseif ($operator == 'NOTCONTAINS') {
            $search .= $field . '!~' . $value;

        } elseif ($operator == 'IN') {
            $search .= $field . '^' . implode('|', (array) $value);

        } elseif ($operator == 'LT') {
            $search .= $field . '<' . $value;

        } elseif ($operator == 'LTE') {
            $search .= $field . '<=' . $value;

        } elseif ($operator == 'GT') {
            $search .= $field . '>' . $value;

        } elseif ($operator == 'GTE') {
            $search .= $field . '>=' . $value;

        } elseif ($operator == 'ISNULL') {
            $search .= $field . ':' . $value;

        } elseif ($operator == 'ISNOTNULL') {
            $search .= $field . '!:' . $value;

        } elseif ($operator == 'EQ') {
            $search .= $field . ':' . $value;

        } else {
            $search .= $field . ':' . $value;
        }

        return $search;
    }


    /**
     * @param $value
     *
     * @return array
     */
    public function getValues($value)
    {
        if (is_array($value)) {
            return [$value];
        }
        if (preg_match('/^\((.*)(?:, |,)(.*)\)$/', $value, $matched)) {
            if (!mb_strlen($matched[2])) {
                return [$value];
            }
            array_shift($matched);

            return $matched;
        }

        return [$value];
    }

    /**
     * @param $value
     *
     * @return \DateTime
     */
    public function toLocalDateTime($value)
    {
        if (!preg_match('/\+\d+:\d+$/', $value)) {
            $value .= '+00:00';
        }

        $inputDateTime = new \DateTime($value);
        $timestamp     = $inputDateTime->getTimestamp();

        $dateTime = new \DateTime();
        $dateTime->setTimestamp($timestamp);

        return $dateTime;
    }

    /**
     * @param $value
     *
     * @return array
     */
    private function separateOperator($value)
    {
        $operators = [
            '^'  => 'IN',
            '<>' => 'NEQ',
            '<=' => 'LTE',
            '>=' => 'GTE',
            '<'  => 'LT',
            '>'  => 'GT',
            '='  => 'EQ',
            '!'  => 'NOTCONTAINS'
        ];

        if (is_bool($value)) {
            return ['EQ', $value];
        }

        if ($value === "null" || $value === "=null") {
            return ['ISNULL', null];
        }

        if ($value === "<>null" || $value === "!null" || $value === "!=null") {
            return ['ISNOTNULL', null];
        }

        if (preg_match('/^(?:\s*(\\^|!|<>|<=|>=|<|>|=))?(.*)$/', $value, $matches)) {
            $operator = isset($operators[$matches[1]]) ? $operators[$matches[1]] : 'CONTAINS';
            $value    = $matches[2];

        } elseif (is_string($value)) {
            $operator = 'CONTAINS';
        } else {
            $operator = 'EQ';
        }

        return [$operator, $value];
    }

}
