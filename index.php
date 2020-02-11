<?php
session_start();
include('db_connect.php');
session_destroy();
 echo"<script>window.location='index.php</script>";
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<head>

	<title>onlinechat</title>
</head>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        
        <div class="navbar-header">
           <a class="navbar-brand" href="#">ONLINECHAT <span class="glyphicon glyphicon-comment"></span></i> </a>
           
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
          
         
         

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="inscrire.php"><b style="font-size: 17px;"><span class="glyphicon glyphicon-contact"></span>S'inscrire</b> </a></li>
            <li><a href="connexion.php"></i><b style="font-size: 17px;">Se connecter</b> </a></li>
            
            
          </ul>
         
        </div>
      </div>
    </nav>







<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>

</body>
</html>