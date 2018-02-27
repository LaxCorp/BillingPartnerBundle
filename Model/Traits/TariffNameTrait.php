<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait TariffNameTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("tariffName")
     * @Serializer\Type("string")
     */
    private $tariffName;

    /**
     * @inheritdoc
     */
    public function setTariffName($tariffName)
    {
        $this->tariffName = $tariffName;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTariffName()
    {
        return $this->tariffName;
    }

}
