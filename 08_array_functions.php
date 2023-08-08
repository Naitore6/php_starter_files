<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits=['apple','banana','orange','pineapples','cranberry',
'strawberry','avocado','lemon','pears','peach','mango','kiwi','cherries','grape','loquat'];
//Get array length
echo count($fruits);

//Search array
echo in_array('banana',$fruits);

//Add to an array
$fruits[]='watermelon';
array_push($fruits,'guava','raspberry');
array_unshift($fruits,'apricot'); //Adds to the beginning

//Remove from array
array_pop($fruits); //Removes last element
array_shift($fruits); //Removes first element

//Remove specific element
unset($fruits[2]);

//Split into chunks of 2
$chunkedArray= array_chunk($fruits,2);
var_dump($chunkedArray);

//Concatenate arrays
$arr1=[1,2,3];
$arr1=[4,5,6];
$arr3=array_merge($arr1,$arr2);
var_dump($arr3);
$arr4=[...$arr1, ...$arr2]; //Use Spread
var_dump($arr4);

//Combine arrays(keys & values)
//Creates an array by using one array for keys and another one for its values
/*Creates an array by using the values from the "keys" array (first array declared) as keys 
and the values of the "values" array(second array declared) as its corresponding values.*/
$a =['green','red','yellow'];
$a =['avocado','apple','banana'];
$a =array_combine($a,$b);

//Array of keys
$keys=array_keys($c);

//Flip keys with values
$flipped=array_flip($c);
var_dump($flipped);

//Create array of numbers with range()
$numbers=range(1,20);

//Map through array and create a new one
$newNumbers=array_map(function($number){
  return "Number $number";},$numbers
);

//Filter array
$lessthan10=array_filter($numbers,fn($number)=>$number <10);

//Array reduce
//"Carry" holds the return value of the previous iteration
$sum=array_reduce($numbers,fn($carry,$number) => $carry + $number);
var_dump($sum);