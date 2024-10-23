<?php

namespace Arrte;

use Arrte\Named;
use Arrte\Attribute;
use Arrte\Renderable;

class Tag implements Renderable
{
    use Named;

    protected static array $attributes = [];

    protected array $assignedAttributes = [];

    public function __construct(array $attributes = [])
    {
        $this->assignedAttributes = $attributes;
    }

    public static function getAtrributes(): array
    {
        return static::$attributes;
    }

    protected function renderAttributes(): string
    {
        if (empty($this->assignedAttributes)) {
            return '';
        }

        $attributes = [];

        /** @var Attribute $v */
        foreach ($this->assignedAttributes as $v) {
            $attributes[] = $v->render();
        }

        return implode(' ', $attributes);
    }

    public function render(): string
    {
        $name = static::getName();
        $attributes = $this->renderAttributes();

        $attributes = $attributes ? " {$attributes}" : '';

        return "<{$name}{$attributes}></{$name}>";
    }
}
