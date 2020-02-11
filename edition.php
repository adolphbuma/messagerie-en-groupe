<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Onlinechat</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/viewport-bug-workaround.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/script.js"></script>


    <style type="text/css">
    img{
      width: 170px;
      height: 170px;
      border-radius: 50%;
    }
    #photo{
      width: 200px;
    }


  </style>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#">OnlineChat</a>
        </div>
       
        
    </nav>

    
   
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="color:#309ae4;">Edition du compte</h1>


<?php 
session_start();
require_once('db_connect.php');
if (isset($_POST['envoyer'])) {
  include ('db_connect.php');
   $pseudo=htmlspecialchars(trim($_POST['pseudo'])); 
   $mail=htmlspecialchars(trim($_POST['mail']));
   $id=$_POST['id'];
   $password1=htmlspecialchars(trim($_POST['password1']));
   $password=htmlspecialchars(trim($_POST['password']));
   $pp=$_SESSION['pseudo'];
   if ($password==$password1) {
        $password=htmlspecialchars(trim(md5($_POST['password'])));
        $insert=$or->prepare("UPDATE `utilisateur` SET `pseudo`=$pseudo,`email`=$mail,`password`=password WHERE id='$id'");

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



         <?php
            include ('db_connect.php');
           $edit= $or->query("SELECT * FROM utilisateur  ");
           while($affiche = $edit->fetch()){
        ?>
          <form method="post" action="" enctype="multipart/form-data">
          
            <div class="form-group">
             <label>Nom</label> <input type="text" name="pseudo" class="form-control" required="" style="width: 300px;" placeholder="votre nom" value="<?php echo $affiche['pseudo']?>">
            </div>
             <div class="form-group">
             <input type="hidden" name="id" class="form-control"  style="width: 300px;" value="<?php echo $affiche['id']?>">
            </div></br>
            <div class="form-group">
             <label>E-mail</label> <input type="email" name="mail" class="form-control" required="" style="width: 300px;" placeholder="@gmail.com" value="<?php echo $affiche['email']?>">
            </div></br>
            <div class="form-group">
              <label>Mot de passe</label> <input type="password" name="password" class="form-control" required="" style="width: 300px;" placeholder="votre mot de passe" value="<?php echo $affiche['password']?>">
            </div></br>
            <div class="form-group">
              <div class="form-group">
              <label>Confirmer le mot de passe</label> <input type="password" name="password1"class="form-control" required="" style="width: 300px;" placeholder="confirmation du mot de passe" value="<?php echo $affiche['password']?>"> 
            </div></br>
           <div class="form-group">
           <label>Photo de profil</label> <input class="btn btn-success" type="file" name="photo" id="photo" value="Modifier la photo">
            </div></br>
       <div id = "preview" style = "width:150px; height :150px;  float: left; "></div><br><br><br><br><br><br><br><br><br>
             
           <input type="submit" class="btn btn-sm btn-info btn-block" name="envoyer" value="Editer " style="width: 250px;font-size: 17px;">
           
          </form>
      <?php
                  }
             ?>

          </div>
        </div>
      </div>
    </div>

   

    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
<script type = "text/javascript">

    $(document).ready(function(){
        $pic = $('<img id = "image" width = "150px" height = "150px"/>');
        $("#photo").change(function(){
            $("#lbl").remove();
            var files = !!this.files ? this.files : [];
            if(!files.length || !window.FileReader){
                $("#image").remove();
                $lbl.appendTo("#preview");
            }
            if(/^image/.test(files[0].type)){
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);
                reader.onloadend = function(){
                    $pic.appendTo("#preview");
                    $("#image").attr("src", this.result);
                }
            }
        });
    });
</script>
  </body>
</html>
