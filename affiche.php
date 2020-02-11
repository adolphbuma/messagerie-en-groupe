 <?php 
            include ('db_connect.php');

            $message=$or->query("SELECT  `messaage`, `dte`, `pseudo`, `id` FROM `messages` ");
            while ($affiche=$message->fetch()) {
              echo '<p class="f"><strong >' . ($affiche['pseudo']) . '</strong> : ' .($affiche['messaage']).'</br>'.($affiche['dte']).' <a class="btn btn-" href="delete_message.php?unit='.$affiche["id"].'"> <span class="glyphicon glyphicon-trash"></span></a>'.'</p>';
            }


           ?>