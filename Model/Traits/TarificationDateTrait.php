<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait TarificationDateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("tarificationDate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getTarificationDateAccessor",setter="setTarificationDateAccessor")
     */
    private $tarificationDate;

    /**
     * @inheritdoc
     */
    public function setTarificationDate($tarificationDate)
    {
        $this->tarificationDate = $tarificationDate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setTarificationDateAccessor($tarificationDate)
    {
        $this->tarificationDate = ConvertUtil::longDate($tarificationDate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTarificationDate()
    {
        return $this->tarificationDate;
    }

    /**
     * @inheritdoc
     */
    public function getTarificationDateAccessor()
    {
        return ConvertUtil::dateLong($this->tarificationDate);
    }
}