<?php
include_once "Node.php";
include_once "LinkedList.php";

$linkedList = new LinkedList();

$linkedList->insertFirstNode(11);
$linkedList->insertFirstNode(23);
$linkedList->insertLastNode(34);
$linkedList->insertLastNode(55);

$totalNodes = $linkedList->totalNodes();
$linkedList = $linkedList->readList();

echo $totalNodes;
echo "<br>";
$linkData = [];
//$listData =[];
echo implode('-',$linkData);