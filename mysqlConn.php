<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/10/9
 * Time: 14:55
 */

//面向对象创建数据库
$servername = "127.0.0.1";
$username = "root";
$password = "123456";

// 创建连接
$conn = new mysqli($servername, $username, $password, "", 3308);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
//echo "连接成功";

$sql = "CREATE DATABASE testDB";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功！";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();