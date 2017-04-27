<?php

$titulos = ["Senhor", "Espetacular", "Supremo"];
$qualidades = ["puxador de cobertas", "abridor de geladeiras", "alegria mundial"];
$nome = "feriado";

?>

<html>
<head>

</head>

<body>

<h2>hi <?php echo $titulos[rand(0,2)]. "$nome, ".$qualidades[rand(0,2)];?> </h2>

</body>


</html>