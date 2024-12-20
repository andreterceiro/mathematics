<?php
namespace andreterceiro\mathematics;

class SimpleCalculations {
    public static function double($number) {
        if (gettype($number) != 'integer') {
            throw new InvalidArgumentException('Input must be an integer.');
        }
        return $number * 2;
    }
}