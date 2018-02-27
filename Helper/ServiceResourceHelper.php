<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\ServiceResource;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class ServiceResourceHelper extends BaseHelper
{

    const LIMIT = 1000;

    const PATH = '/partner/dictionaries/serviceresource';

    /**
     * @var string
     */
    public $class = ServiceResource::class;

    /**
     * @return ServiceResource[]
     */
    public function getAllServiceResource()
    {

        $query = new SearchQuery();
        $query->setSize($this::LIMIT);

        return $this->find($query);
    }

}