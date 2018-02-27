<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait CreatedTrait
{

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getCreatedAccessor",setter="setCreatedAccessor")
     */
    private $created;

    /**
     * @inheritdoc
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedAccessor($created)
    {
        $this->created = ConvertUtil::longDate($created);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @inheritdoc
     */
    public function getCreatedAccessor()
    {
        return ConvertUtil::dateLong($this->created);
    }
}