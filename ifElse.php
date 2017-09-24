<?php
/**
 * Created by PhpStorm.
 * User: Decre
 * Date: 2017/9/24 0024
 * Time: 9:43
 */
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
}
else
{
    echo "Have a bad night!";
}

echo "<br>";
if ($t < "12")
{
    echo "It is morning";
}
elseif ($t < "18")
{
    echo "It is afternoon";
}
else
{
    echo "It is night";
}

