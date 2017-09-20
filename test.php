<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<!--注释-->
<?php
//这是php单行注释
/*这是php多行注释*/
echo "Hello World!";
?>
<?php
    $x = 5;
    $y = 6;
    $z = $x+$y;
    echo $z;
?>
<!--局部和全局作用域-->
<?php
//    局部和全局作用域
$x=5;// 全局变量
function myTest() {
    $y = 10;//局部变量
    echo "<p>测试函数内变量</p>";
    echo "变量x为: $x";
    echo "<br>";
    echo "变量y为：$y";
}

myTest();

echo "<p>测试函数外变量</p>";
echo "变量x 为：$x";
echo "<br>";
echo "变量y为：$y";
?>

<!--global关键字-->
<?php
//    global关键字用于函数内访问全局变量
$x = 5;
$y = 10;

function myTest2() {
    global $x,$y;
    $y = $x + $y;
}

myTest2();
echo "<br>";
echo $y; //输出15
//PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量。
function myTest3() {
    $GLOBALS['y']=$GLOBALS['x'] + $GLOBALS['y'];
}

myTest3();
echo "<br>";
echo $y;
?>

</body>
</html>