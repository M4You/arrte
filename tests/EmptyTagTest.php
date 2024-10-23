<?php

namespace Arrte\Tests;

use Arrte\EmptyTag;
use PHPUnit\Framework\TestCase;

class EmptyTagTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('emptytag', EmptyTag::getName());
    }

    public function testGetAttributes()
    {
        $this->assertEquals([], EmptyTag::getAtrributes());
    }

    public function testRender()
    {
        $this->assertEquals('<emptytag>', (new EmptyTag)->render());
    }
}
