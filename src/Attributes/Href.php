<?php

namespace Arrte\Attributes;

use Arrte\Attribute;

class Href extends Attribute
{
    public function __construct(string $url)
    {
        $this->value = $url;
    }
}
