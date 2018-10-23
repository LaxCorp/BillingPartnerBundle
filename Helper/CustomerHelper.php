<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Customer;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class CustomerHelper extends BaseHelper
{

    const PATH = 'partner/management/customer';

    // пользовательская блокировка
    const STATE_ENABLED = 'ENABLED';
    const STATE_DISABLED = 'DISABLED';
    const STATE_RESTRICTED = 'RESTRICTED';
    const STATE_DELETED = 'DELETED';

    /**
     * @var string
     */
    public $class = Customer::class;


    /**
     * @return Customer
     */
    public function getDefault()
    {
        return new Customer();
    }

    /**
     * @inheritdoc
     */
    public function getCustomer($mixed)
    {
        /** @var Customer $customer */
        $customer = $this->findOneById($this->idResolver($mixed));

        return $customer;
    }

    /**
     * @param int      $accountId
     * @param int|null $limit
     *
     * @return Customer[]
     */
    public function getCustomersByAccountId(int $accountId, int $limit = null)
    {
        $query = new SearchQuery();

        if ($limit) {
            $query->setSize($limit);
        }

        $query->setSearch("account.id:{$accountId}&state:{$this->getNotDeletedState()}");

        return $this->find($query);
    }

    /**
     * @param int      $accountId
     * @param int|null $limit
     *
     * @return Customer[]
     */
    public function getDeletedCustomersByAccountId(int $accountId, int $limit = null)
    {
        $query = new SearchQuery();

        if ($limit) {
            $query->setSize($limit);
        }

        $query->setSearch("account.id:{$accountId}&state:{$this::STATE_DELETED}");

        return $this->find($query);
    }

    /**
     * @param string $email
     *
     * @return Customer[]
     */
    public function getCustomersByEmail(string $email)
    {
        $query = new SearchQuery();

        $query->setSearch('email:' . urlencode($email) . "&state:{$this->getNotDeletedState()}");

        return $this->find($query);
    }

    /**
     * @inheritdoc
     */
    public function getCustomerByLogin(string $login)
    {
        $query = new SearchQuery();

        $query->setSearch('login:' . urlencode($login) . "&state:{$this->getNotDeletedState()}");

        /** @var Customer $customer */
        $customer = $this->findOneBy($query);

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function createCustomer(Customer $customer)
    {
        $customer = $this->create($customer);

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function updateCustomer(Customer $customer)
    {
        $customer = $this->update($customer);

        return $customer;
    }


    /**
     * @inheritdoc
     */
    public function disableCustomer(Customer $customer)
    {
        $customer->setState($this::STATE_DISABLED);

        $customer = $this->updateCustomer($customer);

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function enableCustomer(Customer $customer)
    {
        $customer->setState($this::STATE_ENABLED);

        $customer = $this->updateCustomer($customer);

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function deleteCustomer(Customer $customer)
    {
        $customer->setState($this::STATE_DELETED);

        $customer = $this->updateCustomer($customer);

        return $customer;
    }

    /**
     * @param Customer $customer
     *
     * @return float|int
     */
    public function getAcquisitionFeePaidSum(Customer $customer)
    {
        $sum = 0;

        $acquisitionFeePaid = $customer->getAcquisitionFeePaid();

        foreach ($acquisitionFeePaid as $item) {
            $sum += $item->getAmount();
        }

        return $sum;
    }

    /**
     * @return string
     */
    private function getNotDeletedState()
    {
        return $this::STATE_ENABLED . ',' . $this::STATE_DISABLED . ',' . $this::STATE_RESTRICTED;
    }

}