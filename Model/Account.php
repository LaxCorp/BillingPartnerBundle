<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class Account
{

    use Traits\IdTrait;
    use Traits\AmountTrait;
    use Traits\CreditTrait;
    use Traits\NameTrait;
    use Traits\CurrencyTrait;
    use Traits\StateTrait;

}
