<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\Example;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    /**
     * @var Example
     */
    private $example;
    /**
     * @before
     */
    protected function setUp()
    {
    }

    /**
     * @test
     */
    public function trueAssertion()
    {
        $integerValue = $this->example->integerChecker(1);

        $this->assertTrue($integerValue);
    }

    /**
     * @test
     */
    public function falseAssertion()
    {
        $integerValue = $this->example->integerChecker('1');

        $this->assertFalse($integerValue);
    }

    /**
     * @test
     */
    public function equalsAssertion()
    {
        $integerValue = $this->example->integerChecker(1);

        $this->assertEquals(true, $integerValue);
    }
}
