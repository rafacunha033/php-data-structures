<?php

namespace DS;

class Node {
    public $data;

    public $next;

    public function __construct($data, $next) {
        $this->data = $data;
        $this->next = $next;
    }

    public function setNext($next) {
        return $this->next = $next;
    }

    public function getNext() {
        return $this->next;
    }

    public function getData() {
        return $this->data;
    }
}
