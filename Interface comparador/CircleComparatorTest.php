<?php
include "CircleComparator.php";

$circle1 = new Circle('circle1',6);
$circle2 = new Circle('circle2',4);
$circlecomparator = new CircleComparator();
var_dump($circlecomparator->compare($circle1,$circle2));
?>