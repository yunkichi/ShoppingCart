<?php

namespace ShoppingCart;

class ShoppingCartTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->cart = new Cart();
    }

    public function testGetItemCount()
    {
        $this->assertSame(0, $this->cart->getItemCount());
    }

    public function testAddCart()
    {
        $item = new Item();
        // カートの中のアイテム数が1増える
        $this->assertEquals(1, $this->cart->addCart($item));
    }
}
