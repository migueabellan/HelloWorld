<?php
 
namespace App\Tests;

use App\HelloWorld\Hello;

use PHPUnit\Framework\TestCase;
 
class HelloTest extends TestCase
{
    public function testHello()
    {
        $hello = new Hello();
        $this->assertEquals($hello->say(), 'Hello World!');
    }
}