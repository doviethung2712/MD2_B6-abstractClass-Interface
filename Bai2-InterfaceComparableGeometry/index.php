<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne',8);
$circleTwo = new ComparableCircle("circleTwo",2);
$circleThree = new ComparableCircle('circleThree', 4);

$test = $circleTwo->comparale($circleThree);
echo('Comparable: <br>');
echo $test;