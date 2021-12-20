<?php 
require_once('credenciales.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM cliente';
	//$sql = "SELECT * FROM `cliente`";
	return $mysqli->query($sql);

}

function add( $nom, $email, $solicitud )
{
	global $mysqli;
	$sql = "INSERT INTO cliente (folio, nom, email, solicitud) VALUES (null, '{$nom}','{$email}','{$solicitud}')";
	$mysqli->query($sql);

}

function update( $folio, $nom, $email, $solicitud )
{
	global $mysqli;
	$sql = "UPDATE cliente SET nom = '{$nom}', email = '{$email}', solicitud = '{$solicitud}' WHERE folio = {$folio}";
	$mysqli->query( $sql );

}

/*function delete( $folio )
{
	global $mysqli;
	$sql = "DELETE FROM cliente WHERE folio = {$folio}";
	$mysqli->query($sql);
}*/

/*function get_user_by_id( $folio )
{
	global $mysqli;
	$sql = "SELECT * FROM cliente WHERE folio = {$folio}";
	$result = $mysqli->query($sql);
	if( $result->num_rows )
		return $result->fetch_assoc();
	return false;
}*/
?>