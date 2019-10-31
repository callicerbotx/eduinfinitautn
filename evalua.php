<?php

//ATRAPAR LAS RESPUESTAS VIA POST

$k = 1;

while ( $k <= 3 )

	{

	$w[$k] = $_POST [ "q$k" ];

	//echo "--------$w[$k]--------<BR>";

	$k = $k + 1;

	}

include "Connections/conexion00.php";

$queryR = "SELECT * FROM question; ";

$resultR = mysql_query ( $queryR, $conexion00 );

$aciertos = 0;

$k = 1;

while ( $k <= 3 )

	{

	$rowR = mysql_fetch_array ( $resultR );

	//echo "$rowR[q_ID] $rowR[q_Q] $rowR[q_A] <BR>";

	$r = $rowR[q_A];

	//echo ".....$w[$k]......$r......$w[$k]......";

	if ( $w[$k] == $r )

		{

		$aciertos = $aciertos + 1;

		}




	$k = $k + 1;

	}

echo "Total de Aciertos = $aciertos ";

include "Connections/desconexion00.php";

?>
