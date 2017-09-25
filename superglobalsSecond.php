<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP $_REQUEST</title>
</head>
<body>
    <!--PHP $_REQUEST 用于收集HTML表单提交的数据。-->
    <!--  PHP $_POST 被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"。  -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        Name: <input type="text" name="fname"/>
        <input type="submit"/>
    </form>

    <?php
        $name = $_REQUEST['fname'];
        echo $name;
        echo "<br>";
        $name = $_POST['fname'];
        echo $name;
    ?>

    <!--  PHP $_GET 用于收集表单数据，在HTML form的指定该属性： method="get”  -->
    <!--  $_GET 也可以收集URL中发送的数据。  -->
    <a href="test_get.php?subject=PHP&web=php.cn">TEST $GET</a>
</body>
</html>