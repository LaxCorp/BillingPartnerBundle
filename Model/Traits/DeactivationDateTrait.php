<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait DeactivationDateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("deactivationDate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getDeactivationDateAccessor",setter="setDeactivationDateAccessor")
     */
    private $deactivationDate;

    /**
     * @inheritdoc
     */
    public function setDeactivationDate($activationDate)
    {
        $this->deactivationDate = $activationDate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setDeactivationDateAccessor($deactivationDate)
    {
        $this->deactivationDate = ConvertUtil::longDate($deactivationDate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDeactivationDate()
    {
        return $this->deactivationDate;
    }

    /**
     * @inheritdoc
     */
    public function getDeactivationDateAccessor()
    {
        return ConvertUtil::dateLong($this->deactivationDate);
    }
}