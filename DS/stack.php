<?php
// LIFO - Last in, First out

namespace DS;

class Stack {
    public $elements;
    
    public function __construct() {
        $this->elements = [];
    }

    public function push($data) {
        $this->elements[] = $data;
    }

    public function pop() {
        array_pop($this->elements);
    }

    public function listElements() {
        var_dump($this->elements);
    }
}



?>