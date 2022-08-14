<?php

// echo "hello world";

// Date

// d - day of the month
// m - month
// Y - year
// l - day of the week

echo date('m - d - Y - l');

echo "<br>";

//  Time

// H - Hour w/24 hour format
// h - Hour w/12 hour format
// i - Minutes with leading zeroes
// s - Seconds with leading zeroes
// a - am or pm

date_default_timezone_set('America/Los_Angeles');

echo date_default_timezone_get();

echo "<br>";

echo date('H - h - i - s - a');
