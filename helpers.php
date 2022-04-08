<?php
/* convert array list to linked list */
function arrayToLinked($array)
{
    $linked = null;
    for($i=0;$i<count($array);$i++){
        $newNode = new ListNode();
        $newNode->val = $array[$i];
        $newNode->next = null;
        if($linked==null){
            $linked = $newNode;
        }else{

            $temp = $linked;

            while($temp->next!=null)
            {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
    }

    return $linked;
}
