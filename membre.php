<?php 
session_start();
include('db_connect.php');
if (! $_SESSION) {
   echo"<script>window.location='index.php#vous_n\'etes_pas_connecté'</script>";
}
include('connectes.php');
 ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<head>
  <style type="text/css">
    
    .f{
      display: block;
      background-color:#ccc;
      padding: 10px 10px;
      box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.4);
      margin-left: 17px;
      margin-right: 17px;
      border-radius: 7px;
    }
    .b{
      float: right;
      margin-right: 20px;
    }
  </style>

	<title>onlinechat</title>
</head>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        
        <div class="navbar-header">
           <a class="navbar-brand" href="#">ONLINECHAT <span class="glyphicon glyphicon-comment"> </span></i> </a>
           
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
          
         
        

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="acceuil.php"><b style="font-size: 17px;"> <i class="glyphicon glyphicon-home"></i>Acceuil</b> </a></li>
            <li><a href="profil.php"><b style="font-size: 17px;">Profil</b> </a></li>
            <li><a href="deconnexion.php"></i><b style="font-size: 17px;">Déconnexion</b> </a></li>
            
            
          </ul>
         
        </div>
      </div>
    </nav>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="color:#309ae4;">Les utilisateurs <button  class="btn btn-info">En ligne <span class="badge text-success"><?php include ('connectes.php');  echo $user_nbr; ?></span></button></h1>
     
           
          </div>

<?php 
 
try { $or = new PDO('mysql:host=localhost;dbname=onlinechat', 'root', ''); } 
catch(PDOexception $e) 
{        die('Erreur : '.$e->getMessage()); } 

$reponse = $or->query('SELECT * FROM utilisateur ORDER BY ID DESC'); 


while ($donnees = $reponse->fetch()) 
  {
    echo '<p class="f"><strong >' . ($donnees['pseudo']) . '</strong> : ' .($donnees['email']).'  '.'<a class="b" href="chat.php?user='.$donnees["pseudo"].'"> <span class="glyphicon glyphicon-comment"></span></a>'. '</p>'; 
 

  }
 ?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>

</body>
</html>
