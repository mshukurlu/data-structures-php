<?php
class Stack{
    public $stack;
    public function __construct()
    {
        $this->stack = [];
    }

    function isEmpty()
    {
        return count($this->stack)>1;
    }

    function  push($data)
    {
      array_unshift($this->stack,$data);
    }

    function pop()
    {
        $poped_data = array_pop($this->stack);

        return $poped_data;
    }

    function peek()
    {
        return $this->stack[count($this->stack)-1];
    }
}

$stack = new Stack();

$stack->push(1);

$stack->push(2);
echo $stack->peek();
