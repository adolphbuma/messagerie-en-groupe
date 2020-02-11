<?php 
require_once('db_connect.php');
if (isset($_POST['envoyer'])) {
	include ('db_connect.php');
   $pseudo=htmlspecialchars(trim($_SESSION['pseudo'])); 
   $mail=htmlspecialchars(trim($_POST['mail']));
   $password1=htmlspecialchars(trim($_POST['password1']));
   $password=htmlspecialchars(trim($_POST['password']));
   if ($password==$password1) {
    		$password=htmlspecialchars(trim(md5($_POST['password'])));
    		$insert=$or->prepare("UPDATE  SET `utilisateur`(`id`, `pseudo`, `email`, `password`) WHERE pseudo='$pseudo'");
    $insert->execute();
      if ($insert) {
          echo '<div class="alert alert-success text-center">
          compte crée avec succès, veuillez vous connectez <a href="edit.php">"se connecter"</a>
          </div> ';
       
    	}
}

    	else{
    		 echo '<div class="alert alert-danger text-center">
          les mots de passes doivent etre identiques
          </div>';
    	}

}



 ?>