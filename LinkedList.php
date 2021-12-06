<?php

class Node{
    public $data;
    public $next;
}

class LinkedList{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function PrintLinkedList()
    {
        $temp = $this->head;
        if($temp==null){
            echo 'LinkedList is empty';
        }else
            {

                echo 'List contains : ';
                while($temp!=null)
                {
                    echo $temp->data.' - ';
                    $temp = $temp->next;
                }
            }

    }

    public function push_back($newElement)
    {
        $newNode = new Node();

        $newNode->data = $newElement;

        $newNode->next = null;

        if($this->head==null)
        {
            $this->head = $newNode;
        }else{
            $temp = $this->head;
            while($temp->next != null){
                $temp = $temp->next;
            }

            $temp->next = $newNode;
        }
    }

    public function pop_at($position)
    {
        if($position<1){
            echo 'Position must be greater than 1';
        }else if($position==1 && $this->head!=null){
                $this->head = $this->head->next;
        }else{
            $temp = $this->head;

            for($i=1;$i<$position-1;$i++)
            {
                if($temp!=null)
                {
                    $temp = $temp->next;
                }
            }
            if($temp != null && $temp->next != null) {
                $temp->next = $temp->next->next;
            } else {

                //5. Else the given node will be empty.
                echo "\nThe node is already null.";
            }

        }
    }
}

$myList = new LinkedList();

$myList->push_back(10);
$myList->push_back(4);
$myList->push_back(15);

$myList->pop_at(2);

$myList->PrintLinkedList();
