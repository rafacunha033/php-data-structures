<?php

namespace DS;

use DS\Node;

class LinkedList {

    /**
     * @param Node $head
     */

    public $head;
    public $next;


    public function __construct($head = null) {
        $this->head = $head;
        $this->next = $head->getNext();
    }

    public function getHead() {
        return $this->head;
    }

    public function next() {
        return $this->next;
    }
    // public function insertNode($data, $next) {
    //     $node = new Node($data, $next);

    //     if($this->head == null) {
    //         $this->head = $node;
    //     }

    //     echo "Node was inserted with success";
    // }
}

