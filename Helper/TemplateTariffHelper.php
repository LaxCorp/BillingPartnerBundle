<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\TemplateTariff;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class TemplateTariffHelper extends BaseHelper
{

    const PATH = 'partner/dictionaries/templatetariff';

    /**
     * @var string
     */
    public $class = TemplateTariff::class;

    /**
     * @param int|object|array $mixed
     *
     * @return TemplateTariff
     */
    public function getTemplateTariff($mixed)
    {
        /** @var TemplateTariff $templateTariff */
        $templateTariff = $this->findOneById($this->idResolver($mixed));

        return $templateTariff;
    }

    /**
     * @param string $currencyCode
     *
     * @return TemplateTariff[]|null
     */
    public function getTemplateTariffsByCurrencyCode(string $currencyCode)
    {
        $query = new SearchQuery();

        $query->setSearch('currency.code:' . $currencyCode);

        return $this->find($query);
    }

}