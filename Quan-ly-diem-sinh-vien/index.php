<?php
include "Student.php";
include "LinkedList.php";

$linklist = new LinkedList();
$student1 = new Student("Dung", 10);
$student2 = new Student("Ha", 9);
$student3 = new Student("Nam", 5);
$student4 = new Student("Tiep", 6);
$student5 = new Student("Luc", 5);
$linklist->insertFirst($student1);
$linklist->insertFirst($student2);
$linklist->insertLast($student4);
$linklist->insertFirst($student3);
echo $linklist->listStudentMaxScore();
echo "<br>";
echo $linklist->totalStudentsFall();