<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EX-6</title>

</head>
<body>
<h1>Les constantes<h1>;
<?php
function surface($r) {
echo 'Constante appelée depuis la fonction'.__FUNCTION__.'<br>';
return $r*$r*M_PI;
}
echo 'Pi='.M_PI.'; Surface='.surface(2).'<br>';
echo 'Numéro de ligne :' .__LINE__.'<br>';
echo 'Chemin complet du fichier :'.__FILE__.'<br>';
echo'Dossier contenant le fichier : '.__DIR__.'<br>';
print_r(get_defined_constants(true));
?>


</body>

</html>