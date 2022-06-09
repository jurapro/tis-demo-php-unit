<?php

use Lib\Demo;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testGetSum()
    {
        $calc = new Demo(13,17);
        $this->assertSame(30, $calc->getSum());
    }

}