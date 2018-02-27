<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait KindTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("kind")
     * @Serializer\Type("string")
     */
    private $kind;

    /**
     * @inheritdoc
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getKind()
    {
        return $this->kind;
    }

}
