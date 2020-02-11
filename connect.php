<?php 
    session_start();
   if (isset($_POST["send"])) {
    include 'db_connect.php';

    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $password =htmlspecialchars(trim(md5($_POST['password']))); 

    $sql ="SELECT * FROM utilisateur WHERE pseudo='$pseudo'&& password='$password'";
    $query = $or->prepare($sql);   
    $query->execute();
    if($query->rowCount()>=1)
        {        
        $_SESSION['pseudo']= $pseudo; 
        $_SESSION['pswd']= $password;           
         header("location: acceuil.php");
         $_SESSION['pseudo'] = $pseudo;
         $_SESSION['pswd']= $password; 
        }else{   
       
        echo '<meta charset="utf-8"><script type="text/javascript"> alert("les coordonnées ne sont pas identiques"); window.location="index.php"</script>
';           
    }
} 