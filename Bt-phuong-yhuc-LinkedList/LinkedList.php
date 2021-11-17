<?php
include_once "Node.php";
class LinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function addFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addLast($data)
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->addFirst($data);
        }
    }

    public function add($index)
    {

    }

    public function remove($index)
    {

    }


    public function get($index)
    {

    }

    public function size()
    {
        return $this->count;
    }

    public function printList()
    {
        $current = $this->lastNode;
        while (!is_null($current)) {
            $current->readNode();
            $current= $current->next;
        }
    }



    public function clone()
    {

    }


    public function contains()
    {

    }


    public function indexOf()
    {

    }
}