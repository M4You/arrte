<?php

namespace Arrte\Tests;

use Arrte\Attribute;
use PHPUnit\Framework\TestCase;

class AttributeTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('attribute', Attribute::getName());
    }
}
