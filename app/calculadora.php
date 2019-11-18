<?php

$num1 = 0;
$num2 = 0;
$resultado = 0;
#suma.php programa que controla el envío de variables de un formulario mediante GET y suma su contenido numérico
	//isset comprueba que el campo que quiere coger esté relleno
if (isset($_GET['numero1']) && isset($_GET['numero2'])){
		$num1 = $_GET['numero1'];
		$num2 = $_GET['numero2'];
		$resultado = $num1 + $num2;
		echo "La suma de ".$num1." + ".$num2." es: ".$resultado;
        #echo "las variables numero1 y numero2 existen y están asignadas";
        }
else{
        echo "es el primer uso del archivo suma.php, la variable no está asignada";
        $_GET['numero1']=0;
        $_GET['numero2']=0;
    }

#echo "La suma de ".$_GET['numero1']." + ".$_GET['numero2']." es: ".$suma;
?>
<html>
<head>
<meta charset="UTF-8"></meta>
</head>

<body>
<form action="calculadora.php" method="get">

Numero 1 <input type="text" name="numero1" ><br>
Numero 2 <input type="text" name="numero2" ><br>

<input type="submit" value="suma" id="suma">
</form>
</body>
</html>