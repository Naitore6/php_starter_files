<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */
//Used when the number of iterations is known
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($num=1; $num<=10; $num++) {
  echo "$num <br>";
  }


/* ------------ While Loop ------------ */
//Can be used to traverse set of code like for loop.
//Used to execute a block of code repeatedly while the condition is being met or until the condition is FALSE.
//Once the conditions becomes FALSE,it exits the body of the loop.
//Should be used with unknown number of iterations.
/*Is also called an Entry Control Loop because the condition is checked before entering the loop body
This  means the condition is checked firts before execution.
*/
//If condition is true, the block of code is executed.
/*

** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
$x=1;
while($x <= 5){
  echo "Number:$x <br>";
  $x++;
}



/* ---------- Do While Loop --------- */
//Guaranteed to run at least once.
//Used to traverse a set of code.
/*Is used to execute a set of code of the program several times.
Recommended if you have to execute the loop at least once and the number of iterations is not even fixed.
Condition is checked at the end of the loop after executing the code.
*/

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

do{
  echo "Number:$x <br>";
  $x++;
}
while ($x <= 5);



/* ---------- Foreach Loop ---------- */
/*
Used to traverse array elements.
Works only on arrays and objects.
It will issue an error if you try to use it with variables of different data types.
Works on elements basis rather than index.
It provides an easist way to iterate the elemnts of an array.
We dont need to increment the value.
*/

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

//Loop through an array
$numbers=[10,20,30,40,50];
foreach($numbers as $y){
  echo "Number:$y <br>";
}

//Use the indexes within the loop
$posts=['Pole One','Pole Two','Pole Three'];
foreach($posts as $index=> $post){
  /*$index is system defined*/echo "${index} - ${post} <br>";
}

//Use the keys within the loop for an associative array
$person1 =[
  'first_name' => 'Brad',
  'last_name' =>  'Traversy',
  'email' => 'brad@gmail.com',
];
//Get keys 
foreach($person1 as $key=> $val){
  /*$key is system defined*/echo "${key} - ${val} <br>";
}