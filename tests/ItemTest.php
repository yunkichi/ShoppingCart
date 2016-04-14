<?php

namespace ShoppingCart;

class ItemTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->item = new Item();
    }

    /**
     * item が商品名を持つことを確認する
     */
    public function testHasName()
    {
        $this->assertNotEquals('phpのほん', $this->item->getItemName());
        $this->assertEquals('PHPのほん', $this->item->getItemName());
    }

    /**
     * item が発売日を持つことを確認する
     */
    public function testHasReleaseDate()
    {
        $this->assertEquals(new \DateTime("2010-11-01"), $this->item->getItemReleaseDate());
    }

    /**
     * item が価格を持つことを確認する
     */
    public function testHasPrice()
    {
        $this->assertEquals(3600, $this->item->getItemPrice());
    }
}
