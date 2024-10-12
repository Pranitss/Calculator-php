<?php
$FirstNumber = $check['FirstNumber'];
$SecondNumber = $check['SecondNumber'];
$operator = $check['operator'];
$CalculatorResult = '';

switch ($operator) {
case "Sum":
$CalculatorResult = $FirstNumber + $SecondNumber;
break;
case "Subtraction":
 $CalculatorResult = $FirstNumber - $SecondNumber;
break;
case "Multiplication":
$CalculatorResult = $FirstNumber * $SecondNumber;
break;
case "Division":
$CalculatorResult = $FirstNumber / $SecondNumber;
}
}
?>
