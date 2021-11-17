<?php
include_once "ArrayList.php";

$arrayList = new ArrayList();

$arrayList->add(1);
$arrayList->add(3);
var_dump($arrayList->get(0));