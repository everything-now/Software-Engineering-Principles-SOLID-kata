<?php

include 'NodeListSetInterfaice.php';

class NodeList implements NodeListSetInterfaice
{
    protected $items;
    protected $count;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->items = [];
        $this->count = 0;
    }

    /**
     * Set item
     *
     * @param Node $item
     * @return void
     */
    public function setItem(Node $item)
    {
        $this->items[spl_object_hash($item)] = $this->count;
        $this->count++;
    }

    /**
     * Check item exists
     *
     * @param Node $item
     * @return bool
     */
    public function itemExists(Node $item)
    {
        return isset($this->items[spl_object_hash($item)]);
    }

    /**
     * Get count items
     *
     * @return int
     */
    public function getCountItems()
    {
        return count($this->items);
    }

    /**
     * Get item sequence number
     *
     * @param Node $item
     * @return int
     */
    public function getItemSequenceNumber(Node $item)
    {
        return $this->items[spl_object_hash($item)];
    }
}