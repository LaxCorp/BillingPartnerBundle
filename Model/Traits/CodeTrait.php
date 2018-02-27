<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait CodeTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("code")
     * @Serializer\Type("string")
     */
    private $code;

    /**
     * @inheritdoc
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCode()
    {
        return $this->code;
    }

}
