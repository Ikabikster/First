<?php

$name = "Steffi";
$age = 20;
$footballfan = false;
$runner = true;
$money = 12.34;
$fears = null;

echo "Hello " . $name . "! <br>";
echo "My name is {$name} <br>";
echo $footballfan. "<br>";
echo $runner. "<br>";
echo $money . " € <br>";

echo gettype($name)."<br>";
echo gettype($runner)."<br>";
echo gettype($fears)."<br>";

print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";
var_dump($fears);
echo "<br>";
var_dump($runner);
echo "<br>";
var_dump($money);
echo "<br>";
var_dump($footballfan);
echo "<br>";
var_dump($age);
echo "<br>";

$name = 3498;
var_dump($name);
echo "<br>";
echo "is age string?"."<br>";
var_dump(is_string($age));

