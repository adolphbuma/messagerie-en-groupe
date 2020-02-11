<?php

include ('db_connect.php'); 
include ('connect.php'); 
$_SESSION['pseudo']=$_GET['pseudo'];
$pseudo=$_SESSION['pseudo'];
$_SESSION['onlinechat']=$password;
$membre=$_SESSION['onlinechat'];
$message=htmlspecialchars(trim($_POST['send']));
   
   $i=array(
    'expediteur'=>$membre;
    'destinateur'=>$pseudo;
    'message'=>$messag

   );
  $insert=$or->prepare("INSERT INTO `messages`(`expediteur`, `destinateur`, `message`, `dte`) VALUES(NULL,'$membre','$pseudo','$message','NOW()')");
   $insert->execute($i);



 ?>