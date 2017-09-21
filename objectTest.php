<?php
/**
 * Created by PhpStorm.
 * User: Decre
 * Date: 2017/9/21 0021
 * Time: 23:56
 */


class C1 {
    var $p1 = 1;
}

//普通变量的值传递示例
$v1 = 1;
$v2 = $v1;
$v1++;
echo "<br/>v1 = $v1; v2 = $v2;";// 结果v1 = 2; v2 = 1;

//对象的值传递示例：
$o1 = new C1();
$o2 = $o1;
$o1->p1 = 2;
echo "<br/>o1->p1 = {$o1->p1}, o2->p1 = {$o2->p1}";//结果：o1->p1 = 2, o2->p1 = 2

//对象的引用类型传递：
$o3 = new C1();
$o4 = &$o3;
$o3->p1 = 2;
echo "<br/>o3->p1 = {$o3->p1}; o4->p1 = {$o4->p1}";