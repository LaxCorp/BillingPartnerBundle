<?php

namespace LaxCorp\BillingPartnerBundle\Model;

/**
 * @inheritdoc
 */
class PageResult
{

    /**
     * @var int
     */
    private $count = 0;

    /**
     * @var int
     */
    private $page = 0;

    /**
     * @var array
     */
    private $items;

    /**
     * @var
     */
    private $pages;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        $this->items = [];
        $this->pages = [];
    }


    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return PageResult
     */
    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return PageResult
     */
    public function setPage(int $page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @param mixed $pages
     *
     * @return PageResult
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function addItems($items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function addPages($pages)
    {
        $this->pages[] = $pages;

        return $this;
    }

}