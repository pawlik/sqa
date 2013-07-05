<?php
/**
 * User: gpawlik
 * To change this template use File | Settings | File Templates.
 */

namespace Tests;

use RomanNumerals\RomanNumerals;


class KataRomanNumeralsTest extends \PHPUnit_Framework_TestCase{

    public function setUp()
    {
        $this->rn = new RomanNumerals();
    }

    public function test_instance()
    {
        $this->assertInstanceOf('RomanNumerals\RomanNumerals', $this->rn);
    }

    public function test_that_nothing_is_zero()
    {
        $this->assertEquals(0, $this->rn->parse());
    }

    /**
     * @dataProvider dataSetForTesting
     */
    public function test_roman_numerals($str, $exp)
    {
        $this->assertEquals($exp, $this->rn->parse($str), 
            "$str should give $exp"
        );
    }

    public function dataSetForTesting()
    {
        return [
            ["I", 1],
            ["II", 2],
            ["III", 3],
            ["IV", 4],
            ["V", 5],
            ["VI", 6],
            ["VIII", 8],
            ["IX", 9],
            ["X", 10],
            ["IL", 49],
            ["L", 50],
            ["LV", 55],
            ["IC", 99],
            ["MIII", 1003], 
            ["MMDCCLI", 2751]
        ];
    }

}