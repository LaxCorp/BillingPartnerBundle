<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\BillingPartnerBundle\Model\Account;

/**
 * @inheritdoc
 */
trait AccountTrait
{

    /**
     * @var Account
     *
     * @Serializer\SerializedName("account")
     * @Serializer\Type(Account::class)
     */
    private $account;

    /**
     * @inheritdoc
     */
    public function setAccount($account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAccount()
    {
        return $this->account;
    }

}
