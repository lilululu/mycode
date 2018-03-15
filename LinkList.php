<?php
/**
 * Created by PhpStorm.
 * User: lei
 * Date: 2018/3/15
 * Time: 20:46
 */

include 'Node.php';

class LinkList{

    public $head;

    public $length;

//    在链表结尾插入数据
    function insertEnd($data){

        if(empty($this->head)){

            $this->head=new Node($data);

            $this->length=1;

        }else{

            $current=$this->head;

//            $num=1;

            while(!empty($current->next)){

//                $num++;

                $current=$current->next;

            }

            $current->next=new Node($data);

            $this->length++;

        }

    }

//    获取第k个元素
    function getElem($k){

        if($k<=$this->length){

            $current=$this->head;

            for($i=1;$i<$this->$k;$i++){

                $current=$current->next;
            }

            return $current->data;
        }
    }

    function deleteItemFromEnd(){

        $current=$this->head;

        for($i=0;$i<$this->length-1;$i++){

            if($i==$this->length-1){

                $current->next='';

                break;
            }else{

                $current=$current->next;
            }
        }
    }
}