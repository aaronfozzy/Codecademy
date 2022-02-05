<?php
$initial = '555';
//Returns the decimal equivalent of the octal number
$a = octdec($initial);
echo $a; 
echo "\n";
//This function converts num from degrees to the radian equivalent.
$b = deg2rad($a);
echo $b;
echo "\n";
//returns the cosine of the num parameter. 
$c = cos($b);
echo $c;
echo "\n";
//Returns the rounded value of num to specified precision
$d = round($c,3);
echo $d;
echo "\n";
//If the optional base parameter is specified, log() returns logbase num, otherwise log() returns the natural logarithm of num.
$e = log($d);
echo $e;
echo "\n";
//Returns the absolute value of num.
$f = abs($e);
echo $f;
echo "\n";
//Returns the arc cosine of num in radians. 
$g = acos($f);
echo $g;
echo "\n";
//This function converts num from radian to degrees.
$h=rad2deg($g);
echo $h;
echo "\n";
//Returns the next lowest integer value (as float) by rounding down num if necessary.
$i = floor($h);
echo $i;
echo "\n";

$j = $i - 47;
echo $j;
