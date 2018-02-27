<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait PrognoseToTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("prognoseTo")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getPrognoseToAccessor",setter="setPrognoseToAccessor")
     */
    private $prognoseTo;

    /**
     * @inheritdoc
     */
    public function setPrognoseTo($prognoseTo)
    {
        $this->prognoseTo = $prognoseTo;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setPrognoseToAccessor($prognoseTo)
    {
        $this->prognoseTo = ConvertUtil::longDate($prognoseTo);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPrognoseTo()
    {
        return $this->prognoseTo;
    }

    /**
     * @inheritdoc
     */
    public function getPrognoseToAccessor()
    {
        return ConvertUtil::dateLong($this->prognoseTo);
    }

}
