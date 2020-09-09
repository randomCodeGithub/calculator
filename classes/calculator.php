<?php

class Calculator
{
    public $firstNumber;
    public $secondNumber;
    public $operator;

    public function __construct($firstNumber, $secondNumber, $operator)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
        $this->operator = $operator;
    }

    public function calculate()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->firstNumber + $this->secondNumber;
                return $result;
            break;
            case 'sub':
                $result = $this->firstNumber - $this->secondNumber;
                return $result;
            break;
            case 'div':
                $result = $this->firstNumber / $this->secondNumber;
                return $result;
            break;
            case 'mul':
                $result = $this->firstNumber * $this->secondNumber;
                return $result;
            break;
        }
    }
}
