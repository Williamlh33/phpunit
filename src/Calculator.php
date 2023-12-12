<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $valueOne, int $valueTwo): int
    {
        return $valueOne * $valueTwo;
    }

    public function isEven(int $paramBool)
    {
        if($paramBool % 2 === 0)
        {
            return true;
        } else {
            return false;
        }        
    }
}