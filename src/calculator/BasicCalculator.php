<?php

class BasicCalculator
{
    public static function add(float $x, float $y) {
        return $x + $y;
    }

    public static function subtract(float $x, float $y) {
        return $x - $y;
    }

    public static function multiply(float $x, float $y) {
        (float) $test = 1;
        return $x * $y;
    }

    public static function divide(float $x, float $y) {
        if ($y == 0) {
            return 'Cannot divide by 0';
        }
        return $x / $y;
    }

    public function mod(float $x, float $y)
    {
        return $x % $y;
    }

    public function unUsedFunction()
    {
    }

    public function undefinedVariable()
    {
        $undefinedVariable;
    }

    public function unUsedVariable()
    {
        $test = 'maxito';
    }
}
