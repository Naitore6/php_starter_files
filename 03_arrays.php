<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/
//Simple array of numbers
$numbers=[1,2,3,4,5];
//Simple array of strings
$names=['Naitore','John','Grace','Will','Sisera'];
$colors=['red','blue','green','black'];
//Outputting values from an array
echo $colors[1];
echo $numbers[0];
echo $numbers[3] + $numbers[4];

//We can use print_r or var_dump to see the contents of an array.
var_dump($names);
var_dump($numbers);

/*---------Associative arrays------- */
//Associative arrays allows us to use named keys to identify values.
//You can use the key to access the elements of the array.
//Keys dont conflict with the indices.
$colors2=[1 =>'red',2 =>'green',3 =>'blue'];
echo $colors[1];

//Strings as keys
$hex= ['red'=>'#f00','green'=>'#0f0','blue'=>'#00f'];

echo $hex['red'];
var_dump($hex);

/*-------Multidimensional arrays-------- */
//Are often used to store data in a table format

//Single person array
//This is an associative array
$person1 =[
  'first_name' => 'Brad',
  'last_name' =>  'Traversy',
  'email' => 'brad@gmail.com',
];

//Array of people
//This is a multi-dimensional array containing associative arrays
$people=[
  $person1,//[...$person1]
  [
    'first_name' => 'Brad',
    'last_name' =>  'Traversy',
    'email' => 'brad@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' =>  'Doe',
    'email' => 'jane@gmail.com',
  ],
  [
    'first_name' => 'Joe',
    'last_name' =>  'Doe',
    'email' => 'joe@gmail.com',
  ]
  ];

  var_dump($people);

  //Accessing values in a multidimensional array
  echo $people[0]['first_name'];
  echo $people[2]['email'];
  

  
