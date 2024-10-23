<?php

namespace Arrte\Tests\Attributes;

use Arrte\LangCode;
use Arrte\Attributes\Lang;
use PHPUnit\Framework\TestCase;

class LangTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('lang', Lang::getName());
    }

    public function testGetValue()
    {
        $attribute = new Lang(LangCode::Ukrainian);

        $this->assertEquals('uk', $attribute->getValue());
    }

    public function testRender()
    {
        $attribute = new Lang(LangCode::Ukrainian);

        $this->assertEquals('lang="uk"', $attribute->render());
    }
}
