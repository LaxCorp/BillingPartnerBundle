<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait OveruseClickPriceTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("overuseClickPrice")
     * @Serializer\Type("double")
     */
    private $overuseClickPrice;

    /**
     * @inheritdoc
     */
    public function setOveruseClickPrice($overuseClickPrice)
    {
        $this->overuseClickPrice = $overuseClickPrice;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getOveruseClickPrice()
    {
        return $this->overuseClickPrice;
    }

}
