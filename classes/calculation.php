<?php
include "../classes/calculator.php";

$firstNumber = $_POST['firstNumber'];
$secondNumber = $_POST['secondNumber'];
$operator = $_POST['operator'];

$calculator  = new Calculator($firstNumber, $secondNumber, $operator);

echo $calculator->calculate();