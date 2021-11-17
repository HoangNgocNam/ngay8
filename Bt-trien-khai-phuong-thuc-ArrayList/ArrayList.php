<?php

class ArrayList
{
    public $size;
    public $elements;

    public function __construct($arr = "")
    {
        if (is_array($arr)) {
            $this->elements = $arr;
        } else {
            $this->elements = [];
        }
    }

    public function insert($index,$obj)
    {
        if ($index < $this->size()){
            array_splice($this->elements,$index,0,$obj);
        } else {
            echo "khong ton tai";
        }

    }

    public function add($obj)
    {
        array_push($this->elements,$obj);
    }

    public function remove($index)
    {
        if (array_key_exists($index,$this->elements)){
            unset($this->elements[$index]);
        }else {
            echo " khong co phan tu tai vi tri ". $index;
        }
    }

    public function get($index)
    {
        if ($index < $this->size()){
            return $this->elements[$index];
        }else {
            echo "khong co phan tu tai vi tri ". $index;
        }

    }

    public function clear()
    {
        $this->elements = [];
    }

    public function addAll($arr)
    {
        array_merge($arr,$this->elements);
    }

    public function indexOf($obj)
    {
        return array_search($obj,$this->elements);
    }

    public function isEmpty()
    {

    }

    public function sort()
    {
        array_sort($this->elements);
    }

    public function reset()
    {
        reset($this->elements);
    }

    public function size()
    {
        return count($this->elements);
    }
}