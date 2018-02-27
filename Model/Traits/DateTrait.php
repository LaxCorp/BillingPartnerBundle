<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait DateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("date")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getDateAccessor",setter="setDateAccessor")
     */
    private $date;

    /**
     * @inheritdoc
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setDateAccessor($date)
    {
        $this->date = ConvertUtil::longDate($date);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @inheritdoc
     */
    public function getDateAccessor()
    {
        return ConvertUtil::dateLong($this->date);
    }

}
