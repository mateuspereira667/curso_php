<?php

$name = $_GET["name"];
$last_name = $_GET["last_name"];
$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$op = $_GET["op"];
	 
$full_name = "$name $last_name";


/*

$cal1 = $op == "+";
$cal2 = $op == "/";
$cal3 = $op == "*";
$cal4 = $op == "-";
*/

if 
	($op == "+"){
	$result = $n1 + $n2;
}else if ($op == "/"){
	$result = $n1 / $n2;
} else if ($op == "*"){
	$result = $n1 * $n2;
} else if ($op == "-"){
	$result = $n1 - $n2;
} else {
	$result = "Operador não informado, por favor informar o operador";
}

 
?>

<!doctype html>

<html>
	<head>
		<title>Resultado</title>
	</head>
	
	<body>
		<form action="calculadora.php">
	<h1>Resultado</h1>
		<p> <?php echo "$full_name, o resultado é : $result"; ?>
			
		</p>
		<input input type = "submit" value="Voltar">
		</form>
	</body>
</html>

