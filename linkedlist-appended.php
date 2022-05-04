<?php

class Node{

    public $data;
    public $next;
    public function __construct($data,$next=null)
    {
        $this->data = $data;
        $this->next=$next;
    }
}

class LinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }

    public function push_back($value)
    {
        $node = new Node($value);
        if($this->head==null)
        {
            $this->head = $node;
        }else
            {
                $temp = $this->head;
                while($temp->next!=null)
                {
                    $temp = $temp->next;
                }
                $temp->next = $node;
            }
    }

    public function  pushFront($data)
    {
        $node = new Node($data);
        $node->next = $this->head;
        $this->head = $node;
    }

    public function deleteAt($position)
    {
        if($position==0)
        {
            $this->head = $this->head->next;
        }else
            {
                $temp = $this->head;
                for($i=0;$i<$position-1;$i++)
                {
                    if($temp->next!=null)
                    {
                        $temp = $temp->next;
                    }
                }

                $temp->next = $temp->next->next;
            }
    }

    public function pushAt($position,$data)
    {
        if($position==0)
        {
            $this->pushFront($data);
        }
        else {
            $temp = $this->head;

            for ($i = 0; $i < $position - 1; $i++) {
                if ($temp->next != null) {
                    $temp = $temp->next;
                }
            }

            $node = new Node($data, $temp->next);
            $temp->next = $node;
        }
        }

    public function print_list()
    {
        print_r($this->head);
    }
    
    public function removeDublicats()
    {
        $temp = $this->head;
        $set = [];
        $set[] = $temp->data;
       while($temp->next!=null)
       {
           if(in_array($temp->next->data,$set))
           {
               $temp->next = $temp->next->next;
           }else
               {
                   $temp = $temp->next;
               }
           $set[] = $temp->data;
       }
    }
    
    
    public function getKthLastElement($position){

       $nodeCount = $this->nodeCount();

       $limit = $nodeCount-$position;
       $temp = $this->head;
       for($i=0;$i<$limit;$i++){
           $temp = $temp->next;
       }

       return $temp->data;
   }

   public function nodeCount()
   {
       $nodeCount = 0;
       $temp = $this->head;
       while($temp!=null){
           $nodeCount++;
           $temp = $temp->next;
       }
       return $nodeCount;
   }
    
       public function findMiddleElementOfList()
   {
       $slow = $this->head;
       $fast = $this->head;

       while($fast!= null){
           $fast = $fast->next->next;
           $slow = $slow->next;
       }

       return $slow->data;
   }
    
}


$list = new LinkedList();

$list->push_back(5);
$list->push_back(10);
$list->push_back(15);
$list->push_back(12);
$list->push_back(15);
$list->push_back(30);
$list->push_back(10);
$list->push_back(30);
$list->push_back(10);
//$list->deleteAt(2);
$list->pushAt(0,24);
$list->print_list();
