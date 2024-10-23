<?php

namespace Arrte\Tests\Attributes;

use Arrte\Attributes\Href;
use PHPUnit\Framework\TestCase;

class HrefTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('href', Href::getName());
    }

    public function testGetValue()
    {
        $attribute = new Href('/test');

        $this->assertEquals('/test', $attribute->getValue());
    }

    public function testRender()
    {
        $attribute = new Href('/test');

        $this->assertEquals('href="/test"', $attribute->render());
    }
}
