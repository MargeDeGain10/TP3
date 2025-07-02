<?php
use PHPUnit\Framework\TestCase;
use Mouhague\Tp3\Hello;

class HelloTest extends TestCase {
    public function testSay() {
        $hello = new Hello();
        $this->assertSame('Hello', $hello->say());
    }
}
