<?php

class Student
{
    public $name;
    public $score;
    public $next;

    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
        $this->next = null;
    }

    public function readStudent()
    {
        return $this->name . " " . $this->score;
    }
}