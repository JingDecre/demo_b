<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/30
 * Time: 15:11
 */


//PHP多维数组一
$cars = array(
    array("Volvo", 100, 96),
    array("BMW", 60, 59),
    array("Toyota", 110, 100)
);
print("<pre>");
print_r($cars);
print("</pre>");

//PHP多维数组二
$sites = array(
    "runoob"=>array(
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array(
        "谷歌搜索",
        "http://www.google.com"
    ),
    "taobao"=>array(
        "淘宝",
        "http://www.taobao.com"
    )
);
print("<pre>");
print_r($sites);
print("</pre>");

echo $sites['runoob'][0] . "地址为：" . $sites['runoob'][1];