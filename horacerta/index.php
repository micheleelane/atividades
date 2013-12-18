<?php

date_default_timezone_set("Brazil/East");

$dataAtual = getdate ();

echo $dataAtual["mday"];
echo "/";
echo $dataAtual["mon"];
echo "/";
echo $dataAtual["year"];
echo "/";
$dataAtual = getdate ();
echo $dataAtual["hours"] - 1;
echo ":";
echo $dataAtual["minutes"];
echo ":";
echo $dataAtual["seconds"];

$diaSemana = $dataAtual["wday"];

	switch($diaSemana){
		case 0:
			echo " Domingo";
		Break;
		case 1:
			echo " Segunda-Feira";
		Break;
		case 2:
			echo " Terça-Feira";
		Break;
		case 3:
			echo " Quarta-Feira";
		Break;
		case 4:
			echo " Quinta-Feira";
		Break;
		case 5:
			echo " Sexta-Feira";
		Break;
		case 6:
			echo " Sabado";

}

?>


