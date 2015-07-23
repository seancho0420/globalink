<?php
require_once 'config.php'; // The mysql database connection script

$id = '%';

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$query="select * from news where id like '$id' order by id desc";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
 
$arr = array();

if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;
	}
}
 
# JSON-encode the response
echo $json_response = json_encode($arr);
?>