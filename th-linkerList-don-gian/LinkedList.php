<?php

class LinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function insertFirstNode($data)
    {
        $node = new Node($data);
        $this->link = $this->firstNode;
        $this->firstNode = $node;

        if (!is_null($this->lastNode)){
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function insertLastNode($data)
    {
        if (!is_null($this->firstNode)){
            $node = new Node($data);
            $this->lastNode->link = $node;
            $node->link = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirstNode($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)){
            array_push($listData,$current->readNode());
            $current = $current->link;
        }
        return $listData;
    }

}