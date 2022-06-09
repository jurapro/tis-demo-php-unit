<?php

namespace Lib;

class Demo
{
    private int $a;
    private int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSum(): int
    {
        return $this->a + $this->b;
    }
}