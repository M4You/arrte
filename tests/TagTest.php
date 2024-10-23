<?php

namespace Arrte\Tests;

use Arrte\Tag;
use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('tag', Tag::getName());
    }

    public function testGetAttributes()
    {
        $this->assertEquals([], Tag::getAtrributes());
    }

    public function testRender()
    {
        $this->assertEquals('<tag></tag>', (new Tag)->render());
    }
}
