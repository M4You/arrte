<?php

namespace Arrte;

trait Named
{
    public static function getName(): string
    {
        return strtolower(basename(str_replace('\\', '/', static::class)));
    }
}
