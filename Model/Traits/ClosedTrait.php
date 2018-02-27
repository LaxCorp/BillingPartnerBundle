<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait ClosedTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("closed")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getClosedAccessor",setter="setClosedAccessor")
     */
    private $closed;

    /**
     * @inheritdoc
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setClosedAccessor($closed)
    {
        $this->closed = ConvertUtil::longDate($closed);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getClosed()
    {
        return $this->closed;
    }

    /**
     * @inheritdoc
     */
    public function getClosedAccessor()
    {
        return ConvertUtil::dateLong($this->closed);
    }

}
