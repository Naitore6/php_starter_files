<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  It can take input as an  argument list and return value.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
In PHP,we can define conditional function,function within a function and recursive functions

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser()
{
echo "User has been registered!<br>";
}

//Running a function
registerUser();

//Returning values
function add($num1,$num2){
  return $num1 + $num2;
}
$sum=add(5,5);
echo $sum;

//Adding default values
function subtract($num1=10,$num2=5)
{
  return $num1 - $num2;
}
echo subtract(1);

//Assigning anonymous functions to varaibles.Often used for closures and callback functions
$add= function ($num1,$num2){
  return $num1 + $num2;
};
echo add(5,5);

//Arrow functions
$multiply = fn($num1,$num2) =>$num1 * $num2;
echo $multiply(5,5);


function myName()
{
echo "My name is Naitore<br>";
}
myName();

function stdNames($name,$age)
{
echo "My name is $name.I am $age years old.<br>";
}
stdNames('Naitore',20);
stdNames('Faith',24);
stdNames('Kip',23);
stdNames('Vic',27);
stdNames('Amy',25);
stdNames('Joe',18);

function tellWeather($day,$weather){
  if ($weather === 'sunny'){
    echo "Today is $day and it is $weather.";
  }
  elseif ($weather === 'windy'){
    echo "Today is $day and it is $weather.";
  }
  elseif ($weather === 'cloudy'){
    echo "Today is $day and it is $weather.";
  }
  elseif($weather === 'rainy'){
    echo "Today is $day and it is $weather.";
  }
  else{
    echo "Today is $day and the weather is calm.";
  }
}
tellWeather('Sunday','sunny');

function addNumbers($x, $y){
  $total = $x + $y;
  echo $total;
}
addNumbers(5,6);