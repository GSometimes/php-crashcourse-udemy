<?php

// Indexed Arrays, Associative Arrays, Multidimensional Arrays

// Use arrays when you have larger lists of data

// Indexed Arrays
// $users = array("jane", "mo", "raj", "jack");
// $users = ["jane", "mo", "raj", "jack"];

// print_r($users);
// var_dump($users);
// echo $users[1];

// echo count($users);


// Associative Array

// $age = ['james' => 33, 'jane' => 22, 'jack' => 28];

// // echo $age['james'];

// foreach ($age as $key => $value) {
//     echo "name is: " . $key . ", ". "my age is: " . $value;
//     echo "<br>";
// }

// Multidimensional Arrays

// An array of arrays

$multi = array(
    array('blue', 'teal', 'green', 'purple'),
    array('turquoise', 'magenta', 'violet', 'burgundy'),
    array('rose', 'charcoal', 'smoke', 'mustard')
);

// access array as rows and columns
// column first to specify array
// row second to pull data

echo $multi[0][1];
echo "<br>";
echo $multi[2][3];

