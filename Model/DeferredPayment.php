<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class DeferredPayment
{

    use Traits\IdTrait;
    use Traits\CreatedTrait;
    use Traits\ToDateTrait;
    use Traits\ClosedTrait;
    use Traits\AmountTrait;
    use Traits\PayedAmountTrait;
    use Traits\AccountTrait;
    use Traits\PartnerTrait;
    use Traits\StateTrait;

}

