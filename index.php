<?php
include 'LinkList.php';

$LinkList=new LinkList();

for($i=0;$i<10;$i++){

    $LinkList->insertEnd($i);

}
$tmp=$LinkList->head.'+12333';

$LinkList->insertByIdx(4,12);

$LinkList->deleteItemByIdx(6);

$LinkList->deleteItemFromEnd();
while($tmp){

    echo '<pre>';

    var_dump($tmp->data);
    
    echo '</pre>';

    $tmp=$tmp->next;

}

