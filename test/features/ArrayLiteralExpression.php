<?php
namespace test\case_ArrayLiteralExpression;
$b = 4;
$a = array(1, 2, 3, $b);
$c = array(
    1,
    2,
    3,
    $b
);
$e = $a[1]; $f = $a[2];
$g = array_merge(array(), $a, array(
    "a", "b"
), $c, array(
    1
));
