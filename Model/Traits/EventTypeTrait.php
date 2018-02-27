<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait EventTypeTrait
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("eventType")
     * @Serializer\Type("string")
     */
    private $eventType;

    /**
     * @inheritdoc
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getEventType()
    {
        return $this->eventType;
    }

}
