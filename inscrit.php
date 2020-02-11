<?php
require_once('db_connect.php');
if (isset($_POST['envoyer'])) {
	include('db_connect.php');
	
   $pseudo=htmlspecialchars(trim($_POST['pseudo'])); 
   $mail=htmlspecialchars(trim($_POST['mail']));
   $password1=htmlspecialchars(trim($_POST['password1']));
   $password=htmlspecialchars(trim($_POST['password']));
   
   $sql ="SELECT * FROM utilisateur WHERE email='$mail'";
   $query = $or->prepare($sql);   
    $query->execute();
    if ($query->rowCount()>=1) {
    	echo '<div class="alert alert-danger text-center">
           le mail existe déjà
          </div>'; 
    }

    else{
    	if ($password==$password1) {
    		$password=htmlspecialchars(trim(md5($_POST['password'])));
    		$insert=$or->prepare("INSERT INTO `utilisateur`(`id`, `pseudo`, `email`, `password`) VALUES(NULL,'$pseudo','$mail','$password')");
    $insert->execute();
      if ($insert) {
          echo '<div class="alert alert-success text-center">
          compte crée avec succès, veuillez vous connectez <a href="connexion.php">"se connecter"</a>
          </div> ';
       
    	}
}

    	else{
    		 echo '<div class="alert alert-danger text-center">
          les mots de passes doivent etre identiques
          </div>';
    	}

    }
 } 


 ?>