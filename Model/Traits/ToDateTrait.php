<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait ToDateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("toDate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getToDateAccessor",setter="setToDateAccessor")
     */
    private $toDate;

    /**
     * @inheritdoc
     */
    public function setToDate($toDate)
    {
        $this->toDate = $toDate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setToDateAccessor($toDate)
    {
        $this->toDate = ConvertUtil::longDate($toDate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getToDate()
    {
        return $this->toDate;
    }

    /**
     * @inheritdoc
     */
    public function getToDateAccessor()
    {
        return ConvertUtil::dateLong($this->toDate);
    }

}
