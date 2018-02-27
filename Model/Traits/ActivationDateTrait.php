<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait ActivationDateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("activationDate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getActivationDateAccessor",setter="setActivationDateAccessor")
     */
    private $activationDate;

    /**
     * @inheritdoc
     */
    public function setActivationDate($activationDate)
    {
        $this->activationDate = $activationDate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setActivationDateAccessor($activationDate)
    {
        $this->activationDate = ConvertUtil::longDate($activationDate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    /**
     * @inheritdoc
     */
    public function getActivationDateAccessor()
    {
        return ConvertUtil::dateLong($this->activationDate);
    }
}