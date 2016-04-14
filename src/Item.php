<?php

namespace ShoppingCart;

class Item
{
    private $itemName;
    private $itemPrice;
    private $itemReleaseDate;

    /**
     * Item constructor.
     */
    public function __construct()
    {
        $this->itemName = 'PHPのほん';
        $this->itemPrice = 3600;
        $this->itemReleaseDate = new \DateTime("2010-11-1");
    }

    /**
     * @return int
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @return \DateTime
     */
    public function getItemReleaseDate()
    {
        return $this->itemReleaseDate;
    }

    /**
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

}
