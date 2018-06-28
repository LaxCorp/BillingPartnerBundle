<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait ReplacementTrait
{

    /**
     * @var bool
     *
     * @Serializer\SerializedName("replacement")
     * @Serializer\Type("boolean")
     */
    private $replacement;

    /**
     * @inheritdoc
     */
    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getReplacement()
    {
        return $this->replacement;
    }

}
