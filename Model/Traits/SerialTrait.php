<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SerialTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("serial")
     * @Serializer\Type("string")
     */
    private $serial;

    /**
     * @inheritdoc
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSerial()
    {
        return $this->serial;
    }

}
