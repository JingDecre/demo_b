<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/9/25
 * Time: 10:13
 */


//超级变量

//php的超级变量组，在一个php脚本的全部作用域中都可以访问
$x = 75;
$y = 25;
function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;

echo "<br>";

//PHP $_SERVER
//$_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
//这个数组中的项目由 Web 服务器创建。不能保证每个服务器都提供全部项目；服务器可能会忽略一些，或者提供一些没有在这里列举出来的项目。

//当前执行脚本的文件名，与document root有关
echo $_SERVER['PHP_SELF'];
echo "<br>";
//服务器使用的CGI规范版本
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
//当前运行脚本所在服务器的IP地址
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
//当前运行脚本所在服务器主机名
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//服务器标识字符串
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
//请求页面时通信协议的名称合版本
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
//访问页面使用的请求方法
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
//请求开始时的时间戳
echo $_SERVER['REQUEST_TIME'];
echo "<br>";
//query string（查询字符串），如果有的话，通过它进行页面访问
echo $_SERVER['QUERY_STRING'];
echo "<br>";
//当前请求头中Host：项的内容，如果存在的画
echo $_SERVER['HTTP_ACCEPT'];
echo "<br>";
//当前请求头中Accept-Charset；项的内容，如果存在的话。例如："iso-8859-1"，*，"utf-8"
echo $_SERVER['HTTP_ACCEPT_CHARSET'];
echo "<br>";
//当前请求头中Host项的内容
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//引导用户代理到当前页的前一页的地址（如果存在）。可修改，不可信
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
//浏览当前页面的用户的登陆的IP地址
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
//如果脚本是通过HTTPS协议被访问，则被设为一个非空的值。
echo $_SERVER['HTTPS'];
echo "<br>";
//浏览当前页面的用户的主机名。DNS反向解析不依赖于用户的REMOTE_ADDR
echo $_SERVER['REMOTE_HOST'];
echo "<br>";
//用户机器上连接到Web服务器所使用的端口号
echo $_SERVER['REMOTE_PORT'];
echo "<br>";
//当前执行脚本的绝对路径
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";
//该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。如果脚本运行在一个虚拟主机上，则该值是那个虚拟主机的值。(如：someone@php.cn)
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
//Web服务器端口。默认值为"80"。如果使用 SSL 安全连接，则这个值为用户设置的 HTTP 端口。
echo $_SERVER['SERVER_PORT'];
echo "<br>";
//包含了服务器版本和虚拟主机名的字符串
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>";
//当前脚本所在文件系统（非文档根目录）的基本路径。这是在服务器进行虚拟到真实路径的映像后的结果。
echo $_SERVER['PATH_TRANSLATED'];
var_dump($_SERVER['PATH_TRANSLATED'] == null);
echo "<br>";
//包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
//URI用来指定要访问的页面。例如“/”
echo $_SERVER['SCRIPT_URI'];
echo "<br>";


