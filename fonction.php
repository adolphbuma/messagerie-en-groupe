<?php 
include('db_connect.php');
function get_pseudo(){
	global $or;
$req=$or->query("SELECT * FROM utilisateur WHERE pseudo='{$_SESSION['pseudo']}'");
$pseudo=array();
while ($row=$req-fetchObject()) {
	$pseudo[]=$row;
}
return $pseudo;
}

 ?>