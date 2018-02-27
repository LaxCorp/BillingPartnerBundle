<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait SumTrait
{

    /**
     * @var double
     *
     * @Serializer\SerializedName("sum")
     * @Serializer\Type("double")
     */
    private $sum;

    /**
     * @inheritdoc
     */
    public function setSum($sum)
    {
        $this->sum = $sum;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSum()
    {
        return $this->sum;
    }

}
