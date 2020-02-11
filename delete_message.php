<?php 
 session_start();
 require_once('db_connect.php');
 include ('db_connect.php');
 $delete=$_GET['unit'];
 $sup=$or->prepare("DELETE FROM `messages` WHERE  id='$delete'");-
 $sup->execute();
 header('Location:chat.php');


 ?>
