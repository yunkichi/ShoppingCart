<?php

namespace ShoppingCart;

class Cart
{
    private $itemCount;

    /**
     * Cart constructor.
     * @param $itemCount
     */
    public function __construct()
    {
        $this->itemCount = 0;
    }


    public function getItemCount()
    {
        return $this->itemCount;
    }

    public function addCart(Item $item)
    {
        $this->itemCount += 1;
        return $this->itemCount;
    }

}
