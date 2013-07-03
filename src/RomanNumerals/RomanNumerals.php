<?php
/**
 * User: gpawlik
 * To change this template use File | Settings | File Templates.
 */

namespace RomanNumerals;


class RomanNumerals {

    public function parse($str = "")
    {
        
        $sum = 0;
        for($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            
            if($char === "I") {
                $sum +=1;
            }
            if($char === "V") {
                if($sum < 5) {
                    $sum = 5 - $sum;
                }
            }
            if($char === "X") {
                if($sum < 10) {
                    $sum = 10 - $sum;
                }
            }
        }
        return $sum;
    }

    private function charValue($char)
    {
        $values = ["V" => 5, "X" => 10];
        return $values[$char];
    }
}