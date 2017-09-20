<?php
/**
 * Created by PhpStorm.
 * User: Decre
 * Date: 2017/9/20 0020
 * Time: 23:42
 */

/*echo和print的区别
    echo - 可以输出一个或多个字符串
    print - 只允许输出一个字符，返回值总为1
    Tip: echo输出比print快，echo没有返回值，print有返回值1。
 */

//echo 语句
echo "<h2>PHP if fun!</h2>";
echo "Hello world<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";

$txt1 = "Learn PHP";
$txt2 = "w3cschool.cc";
$cars = array("Volvo", "BMW", "Toyota");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2 <br>";
echo "My car is a {$cars[0]}";

//print语句

print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

$txt3 = "Learn PHP";
$txt4 = "w2cschool.cc";
$cars2 = array("Volvo", "BMW", "Toyota");

print $txt3;
print "<br>";
print "Study PHP at $txt4";
print "My car is a {$cars2[1]}";