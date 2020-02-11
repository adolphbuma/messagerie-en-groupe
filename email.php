<?php 
function email_taken($mail){
	global $or;
	$e=array('mail'=>$mail);
	$gold='SELECT* FROM  utilisateur WHERE email= :mail';
	$req=$or->prepare($gold);
	$req->execute($e);
	$libre=$req->rowCount($gold);

	return $libre;
}
 function inscrire($pseudo,$mail,$password){
 global $or;
 $i=array('pseudo'=>$pseudo ,
          'mail' =>$mail,
          'password' =>$password 
  );
  $sql="INSERT INTO  utilisateur(pseudo,email,password) VALUES(:pseudo,:email,:password)";
  $req=$or->prepare($sql);
  $req->execute($i);
}
 ?>