<?php
/**
 * User: gpawlik
 * To change this template use File | Settings | File Templates.
 */

namespace SimpleString\Tests;

use SimpleStringKata\SimpleStringCalculator as Calc;


class SimpleStringTest extends \PHPUnit_Framework_TestCase{

    public function setUp()
    {
        $this->calc = new Calc();
    }

    /**
     * @dataProvider setWithExpectations
     */
    public function test_add_should_return_zero_for_empty_string($string, $expected, $message)
    {
        $this->assertEquals(
            $expected, 
            $this->calc->add($string),
            $message
        );
    }

    public function setWithExpectations()
    {
        return [
            ["", 0, "should return zero for empty string"],
            ["3", 3, "if one item should return this item as number"],
            ["1,2", 3, "it should add two elements delimited by comma"],
            ["1,2,4,5", 12, "it should handle any ammount of numbers"],
            ["1\n,2,3", 6, "it should accept new lines before commas"],
            ["//;\n;1;2;3;4", 10, "it should allow setting arbitrary delimiter"]
        ];
    }

}