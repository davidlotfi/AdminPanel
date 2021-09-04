<?php
require_once ('C:\xampp\htdocs\doudouphp\github\admin\include\Connexion.php');
$message_erro='';
$message_class='';

function VerifierIdAdmin(){
  global $dbd;

  $req = $dbd->prepare('select id from admin where email=:pseudo and password=:pass');
  $req->execute( array(
  'pseudo' => $_POST['_email'],
  'pass' => $_POST['_password'] ));
   $resultat = $req->fetch();
   return $resultat;
}

if (isset($_POST['commit'])) {
    $resultat=VerifierIdAdmin();
    if (!$resultat) {
      $message_erro = "failed connection !";
      $message_class = "alert alert-danger";
   }else {
      //session_start();
    //  $_SESSION['id'] = $resultat['id'];
   //   $_SESSION['pseudo'] = $_POST['_email'];
       header('location:index.php');
   }
 }


?>
