<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\ServiceOperation;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class ServiceOperationHelper extends BaseHelper
{

    const LIMIT = 1000;

    const PATH = '/partner/dictionaries/serviceoperation';

    /**
     * @var string
     */
    public $class = ServiceOperation::class;

    /**
     * @return ServiceOperation[]
     */
    public function getAllServiceOperation()
    {

        $query = new SearchQuery();
        $query->setSize($this::LIMIT);

        return $this->find($query);
    }

}