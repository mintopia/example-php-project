<?php

declare(strict_types=1);

namespace Mintopia\Example;

class Widget
{
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
