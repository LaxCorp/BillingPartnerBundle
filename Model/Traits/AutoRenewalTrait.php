<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait AutoRenewalTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("autoRenewal")
     * @Serializer\Type("boolean")
     */
    private $autoRenewal;

    /**
     * @inheritdoc
     */
    public function setAutoRenewal(bool $autoRenewal)
    {
        $this->autoRenewal = $autoRenewal;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAutoRenewal()
    {
        return $this->autoRenewal;
    }

}
