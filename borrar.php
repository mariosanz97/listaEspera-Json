
<?php
// Conecto con la BBDD
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "listaespera";
$conn = new mysqli ( $servername, $user, $password, $dbname );

if ($conn->connect_error) {
	die ( "Error: " . $conn->connect_error );
} else 


$date = date( 'Y-m-d H:i:s');

$d = $_POST['datos'];
$json = json_decode($d, true);

$idpeticion = $json['id']; 

$sql = "UPDATE `listaespera`.`peticiones` SET `abierta`= 1, `fechaFin`='" . $date . "' WHERE `idPeticion`='".$idpeticion."';";



if ($conn->query ( $sql ) === TRUE) { 
} else {
	echo "NO funciona";
}

?> 