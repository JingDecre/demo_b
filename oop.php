<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/27
 * Time: 16:09
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

$php = new Site();
$taobao = new Site();
$google = new Site();

$php->setTitle("php中文网");
$taobao->setTitle("淘宝");
$google->setTitle("Google 搜索");

$php->setUrl('www.php.cn');
$taobao->setUrl('www.taobao.cn');
$google->setUrl('www.google.cn');

$php->getTitle();
$taobao->getTitle();
$google->getTitle();

$php->getUrl();
$taobao->getUrl();
$google->getUrl();



