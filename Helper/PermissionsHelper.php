<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Permissions;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class PermissionsHelper extends BaseHelper
{

    const PATH = 'partner/dictionaries/templatepermission';

    /**
     * @var string
     */
    public $class = Permissions::class;

    /**
     * @param array $idList
     *
     * @return Permissions[]
     */
    public function getPermissions(array $idList)
    {
        if(!$idList){
            return null;
        }

        $query = new SearchQuery();

        $query->setSearch('id^' . implode("|", $idList));

        return $this->find($query);
    }

}