<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait LoginTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("login")
     * @Serializer\Type("string")
     */
    private $login;

    /**
     * @inheritdoc
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getLogin()
    {
        return $this->login;
    }

}
