<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class Event
{

    use Traits\IdTrait;
    use Traits\CreatedTrait;
    use Traits\EventTypeTrait;
    use Traits\CustomerTrait;
    use Traits\AccountTrait;
    use Traits\AccountOperationTrait;
    use Traits\CustomerTariffIdTrait;
    use Traits\ValidToTrait;
    use Traits\PrognoseToTrait;
    use Traits\SumTrait;

}
