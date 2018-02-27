<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait FromDateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("fromDate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getFromDateAccessor",setter="setFromDateAccessor")
     */
    private $fromDate;

    /**
     * @inheritdoc
     */
    public function setFromDate($fromDate)
    {
        $this->fromDate = $fromDate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setFromDateAccessor($fromDate)
    {
        $this->fromDate = ConvertUtil::longDate($fromDate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }

    /**
     * @inheritdoc
     */
    public function getFromDateAccessor()
    {
        return ConvertUtil::dateLong($this->fromDate);
    }

}
