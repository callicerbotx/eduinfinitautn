<?php

include "Connections/conexion00.php";

$queryQ = "SELECT * FROM question; ";
$resultQ = mysql_query ( $queryQ, $conexion00 );

while ( $rowQ = mysql_fetch_array ( $resultQ ) )

	{

	echo "$rowQ[q_Q] <P>";

	$queryA = "SELECT * FROM answer WHERE q_ID = '$rowQ[q_ID]'; ";
	$resultA = mysql_query ( $queryA, $conexion00 );

	while ( $rowA = mysql_fetch_array ( $resultA ) )

		{

		echo "$rowA[a_D] <P>";

		}

	}

include "Connections/desconexion00.php";

?>