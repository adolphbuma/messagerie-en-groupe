<?php 
 session_start();
 require_once('db_connect.php');
 include ('db_connect.php');
 $delete=$_SESSION['pseudo'];
 $sup=$or->prepare("DELETE  FROM utilisateur WHERE pseudo='$delete'");-
 $sup->execute();
 header('Location:index.php');


 ?>
