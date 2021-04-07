<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EX-3</title>

</head>
<body>
<?php
$x=14.2;var_dump(is_int($x));echo "<br>";
$x=14;var_dump(is_int($x));echo "<br>";
$x=14.2;var_dump(is_float($x));echo "<br>";
$x=14;var_dump(is_float($x));echo"<br>";
$x=sqrt(-16);var_dump(is_nan($x));echo"<br>";
echo $x;echo"<br>";
$x = 2020;var_dump(is_numeric($x));echo"<br>";
$x = 2020;var_dump(is_numeric($x));echo"<br>";
$x = 20.20; + 100;var_dump(is_numeric($x));echo"<br>";
$x = 2020fse;var_dump(is_numeric($x));echo "<br>";
?>


</body>

</html>