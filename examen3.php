<FORM NAME="form1" ID="form1" ACTION="evalua.php" METHOD="POST">

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

echo "<input type=radio name=q$rowQ[q_ID] id=q$rowQ[q_ID] value='$rowA[a_ID]'>$rowA[a_D]<br>";

		}

	}

include "Connections/desconexion00.php";

?>

<INPUT TYPE=SUBMIT VALUE=CALIFICAR>

</FORM>