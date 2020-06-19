<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 *
 */
class OperationGroupLimit
{

    use Traits\OperationGroupIdTrait;
    use Traits\ThrottleLimitTrait;
}
