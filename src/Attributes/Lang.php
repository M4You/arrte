<?php

namespace Arrte\Attributes;

use Arrte\Attribute;
use Arrte\LangCode;

class Lang extends Attribute
{
    public function __construct(LangCode $code)
    {
        $this->value = $code->value;
    }
}
