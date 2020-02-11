<?php
session_start();
require_once('db_connect.php'); 
if (isset($_POST['send'])) {
  include ("db_connect.php");
  $date=date("Y-m-d");
  $pseudo=$_SESSION['pseudo'];
  $message=htmlspecialchars(trim($_POST['message']));
    $req=$or->prepare("INSERT INTO `messages`( `id`,`messaage`,`dte`,`pseudo`) VALUES (NULL,'$message','$date','$pseudo')");
    $req->execute();

}
 header('Location:chat.php');

 ?>