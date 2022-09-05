<?php 
// FIFO - First in, First out
namespace DS;

class Queue {
    public $elements;

    public function __construct() {
        $this->elements = [];
    }

    public function enqueue($data) {
        $this->elements[] = $data;
    }

    public function dequeue() {
        if(sizeof($this->elements) == 0) {
            echo "Queue empty";
        }

        unset($this->elements[0]);
    }
}


