<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
trait SubscriptionDateTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("subscriptionDate")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getSubscriptionDateAccessor",setter="setSubscriptionDateAccessor")
     */
    private $subscriptionDate;

    /**
     * @inheritdoc
     */
    public function setSubscriptionDate($subscriptionDate)
    {
        $this->subscriptionDate = $subscriptionDate;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setSubscriptionDateAccessor($subscriptionDate)
    {
        $this->subscriptionDate = ConvertUtil::longDate($subscriptionDate);

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSubscriptionDate()
    {
        return $this->subscriptionDate;
    }

    /**
     * @inheritdoc
     */
    public function getSubscriptionDateAccessor()
    {
        return ConvertUtil::dateLong($this->subscriptionDate);
    }
}