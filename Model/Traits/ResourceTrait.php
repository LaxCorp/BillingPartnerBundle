<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Resource;

/**
 * @inheritdoc
 */
trait ResourceTrait
{

    /**
     * @var Resource
     *
     * @Serializer\SerializedName("resource")
     * @Serializer\Type(Resource::class)
     */
    private $resource;

    /**
     * @inheritdoc
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getResource()
    {
        return $this->resource;
    }

}
