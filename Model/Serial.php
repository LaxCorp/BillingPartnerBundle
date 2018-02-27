<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class Serial
{

    use Traits\IdTrait;
    use Traits\SerialTrait;
    use Traits\FromDateTrait;
    use Traits\ToDateTrait;
    use Traits\StateTrait;
    use Traits\CustomerTrait;

}
