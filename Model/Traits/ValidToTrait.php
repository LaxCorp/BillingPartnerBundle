<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait ValidToTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("validTo")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getValidToAccessor",setter="setValidToAccessor")
     */
    private $validTo;

    /**
     * @inheritdoc
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setValidToAccessor($validTo)
    {
        $this->validTo = ConvertUtil::longDate($validTo);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * @inheritdoc
     */
    public function getValidToAccessor()
    {
        return ConvertUtil::dateLong($this->validTo);
    }

}
