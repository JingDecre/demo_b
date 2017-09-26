<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For</title>
</head>
<body>
<?php
    for ($i=1; $i<=5; $i++) {
        echo "The number is " . $i . "<br>";
    }

    $x = array("one", "two", "three");
    foreach ($x as $value) {
        echo $value . "<br>";
    }
?>
</body>
</html>