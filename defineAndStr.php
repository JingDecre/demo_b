<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/22
 * Time: 17:46
 */


//PHP常量
//Tip 常量在整个脚本中都可以使用
//一个常量由英文字母、下划线、和数字组成，但是数字不能作为首字母出现。（常量名不需要加 $ 修饰符）
//bool define ( string $name , mixed $value [, bool $case_insensitive = false ] )
//name：必选参数，常量名称，即标志符。
//value：必选参数，常量的值。
//case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。

//区分大小写
define("GREETING", "欢迎访问 php.cn");
echo GREETING;
echo '<br>';
echo greeting;


//不区分大小写
echo "<br>";
define("GREET", "欢迎访问 php.cn", true);
echo greet;

//常量是全局的
echo "<br>";
define("GREETTTT", "欢迎访问 php.cn");

function myTest() {
    echo  GREETTTT;
}

myTest();


//PHP中的字符串变量
//Tip 当赋一个文本值给变量时，记得要加单引号或者双引号
$txt = "Hello world!";
echo "<br>";
echo $txt;

//PHP并置运算符，怎么将两个字符串值连接起来
$txt1 = "Hello world!";
$txt2 = "What a nice day!";
echo $txt1." ".$txt2;

//PHP strlen()函数
//获取字符串长度
echo "<br>";
echo strlen($txt1);

//PHP strpos()函数
//在字符串内查找一个字符或一段指定文本
echo "<br>";
echo strpos($txt1, "wor");
