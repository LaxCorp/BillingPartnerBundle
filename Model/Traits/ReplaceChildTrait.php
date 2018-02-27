<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\CustomerTariffs;

/**
 * @inheritdoc
 */
trait ReplaceChildTrait
{

    /**
     * @var CustomerTariffs
     *
     * @Serializer\SerializedName("replaceChild")
     * @Serializer\Type(CustomerTariffs::class)
     */
    private $replaceChild;

    /**
     * @inheritdoc
     */
    public function setReplaceChild($replaceChild)
    {
        $this->replaceChild = $replaceChild;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getReplaceChild()
    {
        return $this->replaceChild;
    }

}
