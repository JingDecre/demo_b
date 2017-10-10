<?php
/**
 * Created by PhpStorm.
 * User: decre
 * Date: 2017/10/10
 * Time: 18:14
 */
$servername = "127.0.0.1:3308";
$username = "root";
$password = "123456";

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    echo "连接成功";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
$conn = null;