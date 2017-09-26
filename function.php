<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
<?php
    //被模块未有PHP的内建函数
    //无参
    function writeName()
    {
        echo "Kai Jim Refsnes";
    }


    echo "My name is ";
    writeName();

    //带一个参数
    function writeNameSecond($fname)
    {
        echo $fname . " Refsnes.<br>";
    }
    echo "My name is ";
    writeNameSecond("Kai Jim");
    echo "My sister's name is ";
    writeNameSecond("Hege");
    echo "My brother's name is ";
    writeNameSecond("Stale");

    //带两个参数
    function writeNameThree($fname, $punctuation)
    {
        echo $fname . " Refsnes" . $punctuation . "<br>";
    }
    echo "My name is ";
    writeNameThree("Kai Jim", ".");
    echo "My sister's name is ";
    writeNameThree("Hege", "!");
    echo "My brother's name is ";
    writeNameThree("Stale", "?");

    //带返回值
    function add($x, $y)
    {
        $total = $x + $y;
        return $total;
    }
    echo "1 + 16 = " . add(1, 16);
?>
</body>
</html>