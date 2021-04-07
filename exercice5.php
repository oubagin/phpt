<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EX-5</title>

</head>
<body>
<h1>Les constantes</h1>
<?php
define('PI',3.14);
function surface($r) {
return $r*$r*PI;

}
echo 'Pi='.PI.'Surface='.surface(2);
?>


</body>

</html>