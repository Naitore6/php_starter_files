<?php
//Operators are symbols that are used to perform operations on operands ;variables or values
//Types of operators: Arithmetic,Logical,Comparison,Assignment,Increment and Decrement
       /*---------Arithmetic operators ----------*/
//These operators perform mathematical calculations i.e +,-,/,*,%
//%-used to return the remainder after division
$students=6;
$sweets=51;
$remainder=$sweets % $students;
echo $remainder;

//A farmer had 8 cows ,3 goats ,10 sheep.After a drought season,4 cows and 2 sheep died.He later on added 16 cows and 12 sheep.How many animals did he have in total?

$cows=8;
$goats=3;
$sheep=10;
$lcows=4;
$lsheep=2;
$ncows=16;
$nsheep=12;
$totalCows=$cows- $lcows + $ncows;
$totalGoats=$goats;
$totalSheep=$sheep - $lsheep + $nsheep;
$totalAnimals=$totalCows + $totalGoats + $totalSheep;
echo ($totalAnimals);

      /*---------Comparison  operators ----------*/
//Help us compare values or variables i.e >,<,>=,<=,!=,==,===,!==

      /*---------Logical operators ----------*/
  //Used to conditional statements i.e AND(&&), OR(||), NOT(!)
  
