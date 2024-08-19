<?php 

$op = 2;

echo "Escolha: <br /> 1 - Banana <br /> 2 - Laranja <br /> 3 - Abacaxi <br /> 4 - Sair <br /><br />";


	switch ($op) {
		case '1':
			echo "Você escolheu Banana";
			break;
		case '2':
			echo "Você escolheu Laranja";
			break;
		case '3':
			echo "Você escolheu Abacaxi";
			break;
			case '4':
			echo "Saindo...";
				break;
		default:
			echo "Você não escolheu nenhuma opção";
			break;
	}

 ?>