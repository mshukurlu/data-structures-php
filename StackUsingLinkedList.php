<?php

class StackNode{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

class Stack
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root == null;
    }

    function push($data)
    {
        $newnode = new StackNode($data);
        $newnode->next = $this->root;
        $this->root = $newnode;
    }

    function  pop(){
        if($this->isEmpty()){
            return -1;
        }
        $temp = $this->root;
        $this->root = $this->root->next;
        $popped = $temp->data;
        return $popped;
    }

    function peek()
    {
        if($this->isEmpty()){
            return -1;
        }
        return $this->root->data;
    }
}

$stack = new Stack();

$stack->push(10);
$stack->push(15);
$stack->push(25);
