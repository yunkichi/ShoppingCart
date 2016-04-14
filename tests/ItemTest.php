<?php

namespace ShoppingCart;

class ItemTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->item = new Item();
    }

    public function testHasName()
    {
        $this->assertNotEquals('phpのほん', $this->item->getItemName());
        $this->assertEquals('PHPのほん', $this->item->getItemName());
    }

}
