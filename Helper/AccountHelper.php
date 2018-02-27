<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Account;
use LaxCorp\BillingPartnerBundle\Model\AccountRefill;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class AccountHelper extends BaseHelper
{

    const PATH = 'partner/management/account';

    /**
     * @var string
     */
    public $class = Account::class;

    /**
     * @var CustomerHelper
     */
    private $customerHelper;


    /**
     * BaseHelper constructor.
     *
     * @param RestHelper     $restHelper
     * @param MappingHelper  $mappingHelper
     * @param CustomerHelper $customerHelper
     */
    public function __construct(RestHelper $restHelper, MappingHelper $mappingHelper, CustomerHelper $customerHelper)
    {
        $this->customerHelper = $customerHelper;

        parent::__construct($restHelper, $mappingHelper);
    }

    /**
     * @inheritdoc
     */
    public function accountRefill($account, AccountRefill $accountRefill)
    {

        $accountId = $this->idResolver($account);

        $suffix = 'refill';

        // списать со счета
        if ($accountRefill->getReason() === 'MONEYBACK') {
            //берем первого попавшегося customer'а
            $limit     = 1;
            $customers = $this->customerHelper->getCustomersByAccountId($accountId, $limit);
            foreach ($customers as $customer) {
                $accountRefill->setCustomerId($this->IdResolver($customer));
                break;
            }

            $accountRefill->setKind('CREDIT');
            $suffix = 'charge';
        }

        $json = $this->mappingHelper->serialize($accountRefill);

        $path = $this::PATH . '/' . $accountId . '/' . $suffix;

        $jsonResult = $this->restHelper->postJson($path, $json);

        return $this->mappingHelper->deserialize($jsonResult, $this->class);
    }

    /**
     * @inheritdoc
     */
    public function getAccount($mixed)
    {
        /** @var Account $account */
        $account = $this->findOneById($this->idResolver($mixed));

        return $account;
    }

    /**
     * @inheritdoc
     */
    public function getAccountsByEmail(string $email)
    {
        $query = new SearchQuery();

        $query->setSearch("email:{$email}");

        return $this->find($query);
    }

    /**
     * @inheritdoc
     */
    public function createAccount(Account $account)
    {
        $account = $this->create($account);

        return $account;
    }

    /**
     * @inheritdoc
     */
    public function updateAccount(Account $account)
    {
        $account = $this->update($account);

        return $account;
    }

    /**
     * @inheritdoc
     */
    public function getDefault()
    {
        $account = new Account();
        $account->setState('ENABLED');

        return $account;
    }

}