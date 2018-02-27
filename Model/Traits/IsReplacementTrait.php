<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait IsReplacementTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("isReplacement")
     * @Serializer\Type("boolean")
     */
    private $isReplacement;

    /**
     * @inheritdoc
     */
    public function setIsReplacement($isReplacement)
    {
        $this->isReplacement = $isReplacement;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getIsReplacement()
    {
        return $this->isReplacement;
    }

}
