<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Currency;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class CurrencyHelper extends BaseHelper
{

    const PATH = 'partner/dictionaries/currency';

    /**
     * @var string
     */
    public $class = Currency::class;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * BaseHelper constructor.
     *
     * @param RestHelper    $restHelper
     * @param MappingHelper $mappingHelper
     * @param string        $currencyCode
     */
    public function __construct(RestHelper $restHelper, MappingHelper $mappingHelper, string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        parent::__construct($restHelper, $mappingHelper);
    }

    /**
     * @inheritdoc
     */
    public function getCurrency($mixed)
    {
        return $this->findOneById($this->idResolver($mixed));
    }

    /**
     * @inheritdoc
     */
    public function getAllCurrency()
    {
        $query = new SearchQuery();

        return $this->find($query);
    }

    /**
     * @inheritdoc
     */
    public function getDefaults()
    {
        $query = new SearchQuery();
        $query->setSize(1);
        $query->setSearch('code:' . $this->currencyCode);

        $result = $this->find($query);

        /** @var Currency $currency */
        foreach ($result as $currency){
            return $currency;
        }

        return null;
    }

}