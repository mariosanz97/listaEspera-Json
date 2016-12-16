 
<?php
	// Conecto con la BBDD
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "listaespera";
$conn = new mysqli ( $servername, $user, $password, $dbname );

if ($conn->connect_error) {
	die ( "Error: " . $conn->connect_error );
} 
		// echo "Conexión con BBDD correcta";

$sql = "SELECT * FROM listaespera.peticiones where abierta = 0;";

// abierta = 0 son las preguntas sin responder


$result = $conn->query ( $sql );
if ($result->num_rows > 0) {
	while ( $row = $result->fetch_assoc () ) {
		$arr[] = array (	
			'idPeticion' => $row ['idPeticion'],
			'direccionIP' => $row ['direccionIP'],
			'usuario' => $row ['usuario'],
			'texto' => $row ['texto'],
			'abierta' => $row ['abierta'],
			'fechaInicio' => $row ['fechaInicio']
			);  

		


		
}
echo json_encode ( $arr  );
	}
		// echo json_encode ($ar);

	
	?>