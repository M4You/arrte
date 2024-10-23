<?php

namespace Arrte\Tests\Tags;

use Arrte\Tags\Html;
use Arrte\Attributes\Lang;
use Arrte\LangCode;
use PHPUnit\Framework\TestCase;

class HtmlTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals('html', Html::getName());
    }

    public function testGetAttributes()
    {
        $this->assertEquals([Lang::class], Html::getAtrributes());
    }

    public function testRender()
    {
        $this->assertEquals('<html></html>', (new Html)->render());
    }

    public function testRenderWithAttribute()
    {
        $tag = new Html([new Lang(LangCode::Ukrainian)]);

        $this->assertEquals('<html lang="uk"></html>', $tag->render());
    }
}
