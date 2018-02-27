<?php

namespace LaxCorp\BillingPartnerBundle\Model\Traits;

use JMS\Serializer\Annotation as Serializer;

/**
 * @inheritdoc
 */
trait PasswordTrait
{

    /**
     * @var int
     *
     * @Serializer\SerializedName("password")
     * @Serializer\Type("string")
     */
    private $password;

    /**
     * @inheritdoc
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getPassword()
    {
        return $this->password;
    }

}
