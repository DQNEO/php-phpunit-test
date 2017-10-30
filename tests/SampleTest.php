<?php
namespace DQNEO\PHPUnitTest;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testNew()
    {
        $obj = new Sample();
        $this->assertInstanceOf(Sample::class, $obj);
    }
}
