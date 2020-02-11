<?php
     include ('db_connect.php');
$temps_session = (60); 
$temps_actuel = time('H-M-S');
$ip =$_SERVER['REMOTE_ADDR'];
$req_ip_exist = $or->prepare('SELECT * FROM connectes WHERE ip = ?');
$req_ip_exist->execute(array($ip));
$ip_existe = $req_ip_exist->rowCount();
if($ip_existe == 0) {
   $add_ip = $or->prepare('INSERT INTO connectes(ip,timestamp) VALUES(?,?)');
   $add_ip->execute(array($ip,$temps_actuel));
} else {
   $update_ip = $or->prepare('UPDATE connectes SET timestamp = ? WHERE ip = ?');
   $update_ip->execute(array($temps_actuel,$ip));
}
$session_delete_time = $temps_actuel - $temps_session;
$del_ip = $or->prepare('DELETE FROM connectes WHERE timestamp < ?');
$del_ip->execute(array($session_delete_time));
$show_user_nbr = $or->query('SELECT * FROM connectes');
$user_nbr = $show_user_nbr->rowCount();
?>

