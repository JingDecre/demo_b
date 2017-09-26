<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>While</title>
</head>
<body>
<?php
$i = 1;
while ($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}

do
{
    $i++;
    echo "The number is " . $i . "<br>";
}
while ($i <= 14);
?>
</body>
</html>