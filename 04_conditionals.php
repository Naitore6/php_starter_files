<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If , If-Else , If-elseif-else & NestedIf Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
$age=18;
if($age>25){
  echo "Open door";
}

/*
**If ...else Statement syntax
if (condition) {
  // code to be executed if condition is true
}
else{
  //Code to be executed if condition is false
}
*/

$position=1;
if ($position=1) {
  echo "Get laptop";
}
else{
  echo "Get phone";
}

/*
**If ...elseif....else Statement syntax
if (condition) {
  // code to be executed if condition is true
}
elseif(condition){
  //Code to be executed if condition is true
}
elseif(condition){
  //code to be executed if condition is true
}
else{
  //code to be executed if all conditions are not met/are false
}
*/

$marks=69;
if ($marks<33) {
  echo "fail";
}
elseif($marks>=34 && $marks<50){
  echo "D Grade";
}
elseif($marks>=50 && $marks<65){
  echo "C Grade";
}
elseif($marks>=65 && $marks<80){
  echo "B Grade";
}
elseif($marks>=80 && $marks<90){
  echo "A Grade";
}
elseif($marks>=90 && $marks<100){
  echo "A+ Grade";
}
else{
  echo "Invalid input";
}


/*
**NestedIf Statement syntax
if (condition) {
  // code to be executed if condition is true

  if (condition) {
  // code to be executed if condition is true
  }

  if (condition) {
  // code to be executed if condition is true
}
   }
*/

$Age=23;
$nationality= "Kenyan";
if ($nationality == "Kenyan") {
  // applying conditions on nationality and age
  if ($Age >= 18) {
  echo "Eligible to vote";
  }
  else{
  echo "Not eligible to vote";
  }
   }


   /* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */
