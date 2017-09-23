<?php
/**
 * Created by PhpStorm.
 * User: Decre
 * Date: 2017/9/23 0023
 * Time: 16:30
 */

//加减乘除
$x = 10;
$y = 6;
echo ($x + $y);
echo "<br>";
echo ($x - $y);
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";
//整除运算符
var_dump(intdiv(10, 3));

//赋值运算符

$x = 10;
echo $x;
echo "<br>";
$y =20;
$y += 100;
echo $y;
echo "<br>";
$z = 50;
$z = -25;
echo $z;
echo "<br>";
$i = 5;
$i *= 6;
echo $i;
echo "<br>";
$j = 10;
$j /= 5;
echo $j;
echo "<br>";
$k = 15;
$k %= 4;
echo $k;

echo "<br>";
$a = "Hello";
$b = $a . " world!";
echo $b;

echo "<br>";
$x = "Hello";
$x .= " world";
echo $x;

//递增递减
echo "<br>";
$x = 10;
echo  ++$x;
echo "<br>";
$y =10;
echo $y++;
echo "<br>";
$z = 5;
echo --$z;
echo "<br>";
$i = 6;
echo $i--;
echo "<br>";

//比较运算符
$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a = 50;
$b = 90;
var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";

//逻辑运算符
// x or y:x和y至少有一个为ture，中则返回true; x || y与此同
//x xor y : x和y有且仅有一个为true，则返回true；
//!x
// x and y;


//数组运算符
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y;  //x和y的集合
var_dump($z);
echo "<br>";
var_dump($x == $y);// x 和 y 具有相同的键/值对
echo "<br>";
var_dump($x === $y);// x 和 y 具有相同的键/值对，且顺序相同类型相同
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x <> $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

//三元运算符
$text = 'php中文网';
//普通写法
$username = isset($text) ? $text : 'nobody';
echo $username, PHP_EOL;//PHP_EOL 是一个换行符

// php5.3+ 写法
$username = $text ?: 'nobody';
echo $username, PHP_EOL;

// PHP+ 多了一个NULL合并运算符，
// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody';
//类似的三元运算符
$username = isset($_GET['user'] ) ? $_GET['user'] : 'nobody';
echo $username, PHP_EOL;


//组合比较符
//整型
echo 1 <=> 1, PHP_EOL;// 0
echo 1 <=> 2, PHP_EOL;// -1
echo 3 <=> 1, PHP_EOL;//1

// 浮点型
echo 1.5 <=> 1.5, PHP_EOL;
echo 2.5 <=> 1.5, PHP_EOL;
echo 1.5 <=> 2.5, PHP_EOL;

//字符串
echo "a" <=> "a", PHP_EOL;
echo "a" <=> "b", PHP_EOL;
echo "b" <=> "a", PHP_EOL;


