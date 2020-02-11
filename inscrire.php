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
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#">OnlineChat</a>
        </div>
       
        
    </nav>

    
   
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="color:#309ae4;">Créér un compte</h1>
          <form method="post" action="">
           <?php include ('inscrit.php'); ?> 
            <div class="form-group">
             <label>Nom</label> <input type="text" name="pseudo" class="form-control" required="" style="width: 300px;" placeholder="votre nom">
            </div></br>
            <div class="form-group">
             <label>E-mail</label> <input type="email" name="mail" class="form-control" required="" style="width: 300px;" placeholder="@gmail.com">
            </div></br>
            <div class="form-group">
              <label>Mot de passe</label> <input type="password" name="password" class="form-control" required="" style="width: 300px;" placeholder="votre mot de passe">
            </div></br>
            <div class="form-group">
              <div class="form-group">
              <label>Confirmer le mot de passe</label> <input type="password" name="password1"class="form-control" required="" style="width: 300px;" placeholder="confirmation du mot de passe"> 
            </div></br>
             
           <input type="submit" class="btn btn-sm btn-info btn-block" name="envoyer" value="S'inscrire" style="width: 250px;font-size: 17px;">
           
          </form>

              <div class="callout">
                      <span>Déjà membre? <a href="connexion.php">Se connecter</a></span>
                    </div>
          </div>
        </div>
      </div>
    </div>

   

    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
 
  </body>
</html>
