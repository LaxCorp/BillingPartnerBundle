<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait LastUpdateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("lastUpdate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getLastUpdateAccessor",setter="setLastUpdateAccessor")
     */
    private $lastUpdate;

    /**
     * @inheritdoc
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setLastUpdateAccessor($lastUpdate)
    {
        $this->lastUpdate = ConvertUtil::longDate($lastUpdate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @inheritdoc
     */
    public function getLastUpdateAccessor()
    {
        return ConvertUtil::dateLong($this->lastUpdate);
    }

}
