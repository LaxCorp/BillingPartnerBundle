<?php
/**
 * Created by PhpStorm.
 * User: kravchuk
 * Date: 29.01.18
 * Time: 16:51
 */

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Account;
use LaxCorp\BillingPartnerBundle\Model\DeferredPayment;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class AccountDeferredPaymentHelper extends BaseHelper
{

    const PATH = 'partner/management/account/{accountId}/deferredpayment';

    /**
     * @var string
     */
    public $class = DeferredPayment::class;

    /**
     * @inheritdoc
     */
    public function getAccountDeferredPayment(Account $account)
    {
        $query    = new SearchQuery();
        $pathVars = ['accountId' => $account->getId()];

        return $this->find($query, $pathVars);
    }

}