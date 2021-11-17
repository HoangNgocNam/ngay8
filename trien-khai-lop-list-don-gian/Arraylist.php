<?php

class ArrayList
{
    public $arrayList;

    public function __construct($arr = "")
    {
        if ($this->arrayList) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = [];
        }
    }

    public function add($item)
    {
        array_push($this->arrayList,$item);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index <$this->size()){
            return $this->arrayList[$index];
        } else {
            echo "ERROR in Arraylist .get";
            die;
        }

    }


    public function remove($index)
    {
        if (array_key_exists($index,$this->arrayList)){
            unset($this->arrayList[$index]);
        } else {
            echo "Khong ton tai phan tu o vi tri " . $index;
        }
    }

    public function isInteger($toChek)
    {
        return preg_match("/^[0-9]+$/", $toChek);
    }

    public function size()
    {
        return count($this->arrayList);
    }

}