<?php
include_once "ArrayList.php";

$arrayList = new ArrayList();
$arrayList->add(1);
$arrayList->add(2);
$arrayList->add(3);

echo $arrayList->get(0);
echo "<br>";
//echo $arrayList->get(-1);
$arrayList->remove(1);
echo "<br>";
//echo $arrayList->get(0);