<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/29
 * Time: 10:44
 */

class MyDestructableClass {
    function __construct()
    {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        // TODO: Implement __destruct() method.
        print "销毁" . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();