<?php

/* ----- Variables & Data Types ----- */
/*Variable is a named memory location*/

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes

- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
class-blue print of objects1
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/


/*----------Variable naming conventions -------- */
/*Begins with a small letter.No numbers or special symbols except an underscore
/*Should be related to the value assigned.
/*Dont space two names,rather use an underscore to separate
/*Use camel casing

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
$firstName="Faith";
$lastName="Naitore";
$age=20;
$mpesaBalance=0;
echo "Hello there";
echo '<br>';
echo "Hello my name is $firstName $lastName and I am $age years old<br>";

$name1= 'Joe';
$name2='Joseph';
$name3='James';
echo "$name1," . "$name2" . "and $name3 are brothers";