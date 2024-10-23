<?php

namespace Arrte;

use Arrte\Named;

class Attribute implements Renderable
{
    use Named;

    protected string $value;

    public function getValue(): string
    {
        return $this->value;
    }

    public function render(): string
    {
        $name = static::getName();

        return $name . "=\"{$this->getValue()}\"";
    }
}
