<?php
/**
 * User: gpawlik
 * To change this template use File | Settings | File Templates.
 */

namespace RomanNumerals;


class RomanNumerals {
    
    private $knownChars = ["I" => 1, "V" => 5, "X" => 10];

    public function parse($str = "")
    {
        
        $sum = 0;
        for($i = 0; $i < strlen($str); $i++) {
            $char = $str[$i];
            
            if($this->isKnownChar($char)) {
                $value = $this->charValue($char);
                if($sum < $value) {
                    $sum = $value - $sum;
                }else {
                    $sum += $value;
                }
            }
        }
        return $sum;
    }

    private function isKnownChar($char)
    {
        return in_array($char, array_keys($this->knownChars));    
    }

    private function charValue($char)
    {
        return $this->knownChars[$char];
    }
}