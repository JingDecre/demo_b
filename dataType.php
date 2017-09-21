<?php
/**
 * Created by PhpStorm.
 * User: Decre
 * Date: 2017/9/21 0021
 * Time: 23:13
 */
//PHP字符串
$x = "Hello world!";
echo $x;
echo "<br>";
$x = 'Hello world!';
echo $x;

//PHP整型
//整型可以用三种格式来指定：十进制， 十六进制（ 以 0x 为前缀）或八进制（前缀为 0）。
echo "<br>";
$y = 5985;
var_dump($y);
echo "<br>";
$y = -123;
var_dump($y);
echo "<br>";
$y = 0x8C;//十六进制数
var_dump($y);
echo "<br>";
$y =  047; //八进制数
var_dump($y);

//PHP浮点型
//带小数部分，或是指数形式
echo "<br>";
$z = 10.365;
var_dump($z);
echo "<br>";
$z = 2.4e3;
var_dump($z);
echo "<br>";
$z = 8E-5;
var_dump($z);

//PHP布尔型
$x = true;
$y = false;

//PHP数组
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);

//PHP对象
echo "<br>";
class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}


//inistantiate one object
$herbie = new Car("white");

//show herbie properties

echo "\therbie: Properties\n";
print_vars($herbie);


//PHP NULL值
echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);