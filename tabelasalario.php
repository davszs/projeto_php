<?php 

$bruto = 1500.00;
$salario = 0;
$porc = "string";

if ($bruto <=1500.00) {
	$porc = "10%";
	$salario = $bruto - ((10 * $bruto) /100);
}else if ($bruto >= 1501.00 & $bruto <= 1600.00 ) {
	$porc = "15%";
	$salario = $bruto - ((15 * $bruto) /100);
}else if ($bruto >= 1601.00 & $bruto <= 1800.00) {
	$porc = "20%";
	$salario = $bruto - ((20 * $bruto) /100);
}else if ($bruto >= 1801.00 & $bruto <= 2500.00) {
	$porc = "27,5%";
	$salario = $bruto - ((27.5 * $bruto) /100);
}



echo "Salário Bruto = $bruto <br /> Porcentagem do Desconto = $porc <br /> Salario com Desconto = $salario";

 ?>