<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/26
 * Time: 16:02
 */

//_LINE_文件中的当前行号。
echo '这是第 “' . __LINE__ . ' “ 行<br>';

//_FILE_文件的完整路径和文件名。
echo '该文件位于“ ' . __FILE__ . ' “ <br>';

//_DIR_文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。
echo '该文件位于“ ' . __DIR__ . ' ” <br>';

//_FUNCTION_函数名称（PHP 4.3.0 新加）。
function test()
{
    echo '函数名为： ' . __FUNCTION__ ;
}
test();

//_CLASS_类的名称（PHP 4.3.0 新加）。
class test
{
    function _print() {
        echo '类名为： ' . __CLASS__ . "<br>";
        echo '函数名为： ' . __FUNCTION__;
    }

}

$t = new test();
$t->_print();

//_TRAIT_Trait 的名字（PHP 5.4.0 新加）。代码复用的一个方法
//Trait 名包括其被声明的作用区域（例如 Foo\Bar）。
//从基类继承的成员被插入的 SayWorld Trait 中的 MyHelloWorld 方法所覆盖。
//其行为 MyHelloWorld 类中定义的方法一致。优先顺序是当前类中的方法会覆盖 trait 方法，而 trait 方法又覆盖了基类中的方法。
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWord {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}


class MyHelloWorld extends Base {
    use SayWord;
}

$o = new MyHelloWorld();
$o->sayHello();

echo "<br>";

//_METHOD_类的方法名（PHP 5.0.0 新加）。返回该方法被定义时的名字（区分大小写）。
function testMethod() {
    echo '函数名为： ' . __METHOD__;
}
test();

//__NAMESPACE__
//当前命名空间的名称（区分大小写）。此常量是在编译时定义的（PHP 5.3.0 新增）。
//namespace MyProject;
//
//echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
