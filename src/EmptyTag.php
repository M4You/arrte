<?php

namespace Arrte;

use Arrte\Tag;

class EmptyTag extends Tag
{

    public function render(): string
    {
        $name = static::getName();

        return "<{$name}>";
    }
}
