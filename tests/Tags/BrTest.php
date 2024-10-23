<?php

namespace Arrte\Tests\Tags;

use Arrte\Tags\Br;
use PHPUnit\Framework\TestCase;

class BrTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('br', Br::getName());
    }

    public function testGetAttributes()
    {
        $this->assertEquals([], Br::getAtrributes());
    }

    public function testRender()
    {
        $this->assertEquals('<br>', (new Br)->render());
    }
}
