<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/29
 * Time: 10:47
 */

class Site {
    var $url;
    var $title;

    //构造函数
    function __construct( $par1, $par2)
    {
        $this->title = $par2;
        $this->url = $par1;
    }

    /*成员函数*/
    function setUrl($par) {
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par) {
        $this->title = $par;
    }

    function getTitle() {
        echo $this->title . PHP_EOL;
    }
}

class Child_Site extends Site {
    var $category;

    function setCate($par) {
        $this->category = $par;
    }

    function getCate(){
        echo $this->category . PHP_EOL;
    }

}