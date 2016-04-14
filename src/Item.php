<?php

namespace ShoppingCart;

class Item
{
    private $itemName;

    /**
     * Item constructor.
     */
    public function __construct()
    {
        $this->itemName = 'PHPのほん';
    }

    /**
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

}
