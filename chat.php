<?php 
session_start();
include('db_connect.php');
if (! $_SESSION) {
   echo"<script>window.location='index.php#vous_n\'etes_pas_connecté'</script>";
}

 ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
 <script src="js/script.js"></script>
 <script src="jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<head>
   <style type="text/css">
     #v{
      height: auto;
      padding-top: 0%;
      width: 90%;
      position: bottom; 
     }
     #p{
      position: fixed;
      background-color: #fff;
      bottom:0px;
      width: 96%;
     }
     #send{
     position: absolute;
      right: 0px;
      top: 0px;
      width: 50px; 
      bottom:0px;
      height: 50px;
      border-radius: 50%;
      font-size: 20px;

     }
     #h{
      position: relative;
      background-color: #fff;
      margin-bottom: 95px;
     }
     #message-user{
   /*   background-color:#309ae1;*/
      float: center;
     /* padding: 3px 8px;
      margin-top: 3px;
      margin-bottom: 3px 0;
      border-radius: 12px;
      max-width: 75%;
      display: inline-block;
      min-height:25px;*/
     }
      #message-membre{
      background-color: transparent;
      padding: 3px 8px;
      margin-top: 3px;
      margin-bottom: 3px 0;
      border-radius: 12px;
      max-width: 75%;
      display: inline-block;
      min-height:25px;
     }
  .f{
      display: block;
      background-color:#bdc3c7;
      padding: 3px 8px;
      box-shadow: 5px 5px 5px 1px #309ae1;
      margin-left: 17px;
      margin-right: 17px;
      border-radius: 7px;
      max-width: 75%;
    }
    
   </style>
  <title>onlinechat</title>
</head>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        
        <div class="navbar-header">
           <a class="navbar-brand" href="#">ONLINECHAT<i class="glyphicon-glyphiicon-comment"></i> </a>
           
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
          
         
         

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="membre.php"><b style="font-size: 17px;">Discussion</b> </a></li>
            <li><a href="profil.php"><b style="font-size: 17px;">Profil</b> </a></li>
            <li><a href="deconnexion.php"><b style="font-size: 17px;">Déconnexion</b> </a></li>
            
          </ul>
         
        </div>
      </div>
    </nav>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="color:#309ae4;">Discussion avec <?php echo $_GET['user'];  ?></h1>
     
          </div>
          <?php 
         include ('js/chat.js');
           ?>
       <div id="h">
         <div id="message-membre">
         
         </div>
         <div id="message-user"> 
          <?php 
            include ('db_connect.php');

            $message=$or->query("SELECT  `messaage`, `dte`, `pseudo`, `id` FROM `messages` ");
            while ($affiche=$message->fetch()) {
              echo '<p class="f"><strong >' . ($affiche['pseudo']) . '</strong> : ' .($affiche['messaage']).'</br>'.($affiche['dte']).' <a class="btn btn-" href="delete_message.php?unit='.$affiche["id"].'"> <span class="glyphicon glyphicon-trash"></span></a>'.'</p>';
            }


           ?>
         </div>


       </div>

          <div id="p" class="from-group">
            <div>
              <form method="post" action="en_message.php">
       <textarea id="v" class="form-control" placeholder="Ecrire un message" name="message"></textarea></div>
            
            <div><button type="submit" id="send" name="send" class="btn btn-info"> <span class="glyphicon glyphicon-send"></span></button></div>
          </div>
        </form>
  <script>
    setInterval('load_messages()',500);
      function load_messages(){
        $("#message-user").load('affiche.php');
      }
    
  </script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>

</body>
</html>