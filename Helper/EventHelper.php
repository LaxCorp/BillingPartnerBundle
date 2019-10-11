<?php

namespace LaxCorp\BillingPartnerBundle\Helper;

use LaxCorp\BillingPartnerBundle\Model\Event;
use LaxCorp\BillingPartnerBundle\Query\SearchQuery;

/**
 * @inheritdoc
 */
class EventHelper extends BaseHelper
{

    const PATH = 'partner/reports/event';

    /**
     * @var string
     */
    public $class = Event::class;


    /**
     * @param int $lastId
     * @param int $limit
     * @param int $per_time_limit
     *
     * @return Event[]|null
     */
    public function getEvents($lastId = 0, $limit = 10, $per_time_limit = 3600)
    {

        // задаем время ожидания данных из биллинга
        set_time_limit($per_time_limit + 10);

        $query = new SearchQuery();

        if ($limit) {
            $query->setSize($limit);
        }

        $currentTimestampmills = time() * 1000;

        $query->setSearch("id>{$lastId},validTo>" . $currentTimestampmills);
        $query->setSort('id,asc');

        $result = $this->find($query);

        return ($result->isEmpty()) ? null : $result;
    }


    /**
     * @param int $accountId
     *
     * @return Event|null
     */
    public function getPrognoseLimitReached(int $accountId)
    {

        $query = new SearchQuery();

        $currentTimestampmills = time() * 1000;

        $query->setSearch("account.id:{$accountId},eventType:PROGNOSE_LIMIT_REACHED,validTo>{$currentTimestampmills}");
        $query->setSort('id,desc');

        return $this->findOneBy($query);
    }

}