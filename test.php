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

<!--static作用域-->
<?php
//当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。
//要做到这一点，请在您第一次声明变量时使用 static 关键字
function myTest4() {
    static  $x=0;
    echo $x;
    $x++;
}
echo "<br>";
myTest4();
echo "<br>";
myTest4();
echo "<br>";
myTest4();

?>

<!--参数作用域-->
<?php
    function myTest5($x) {
        echo $x;
    }

    echo "<br>";

    myTest5(6);
?>

</body>
</html>