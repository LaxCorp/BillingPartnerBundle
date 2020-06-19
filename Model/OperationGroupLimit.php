<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritDoc
 */
class OperationGroupLimit
{

    use Traits\OperationGroupIdTrait;
    use Traits\ThrottleLimitTrait;
}
