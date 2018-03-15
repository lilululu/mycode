<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-3-15
 * Time: 17:08
 */

class Node{

    public $data;

    public $next;

    function __construct($data){


        $this->data=$data;
    }
}