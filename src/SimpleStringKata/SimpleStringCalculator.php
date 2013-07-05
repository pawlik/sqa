<?php
/**
 * User: gpawlik
 * To change this template use File | Settings | File Templates.
 */

namespace SimpleStringKata;


class SimpleStringCalculator {
    public function add($string)
    {
        $delimiter = ',';
        if(strpos($string, "//") === 0 ) {
            $delimiter = substr($string, 2, 1);
        }
        
        $items = explode($delimiter, $string);
        return array_reduce($items, function($sum, $item){
            return $sum + (int)$item;
        }, 0);
    }
}