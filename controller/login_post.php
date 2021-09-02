<?php
require_once 'include/Connexion.php';
$message_erro='';
$message_class='';

public function VerifierIdAdmin(){
  global $dbd;

  $req = $dbd->perpare('select id form admin where email=:pseudo and password=:pass');
  $req->execute(array(
  'pseudo' => $_POST['_email'],
  'pass' => $_POST['_password'] ));
   return $req->fetch();
}

if (isset($_POST['commit'])) {
    $resultat=VerifierIdAdmin();
    if (!$resultat) {
      $message_erro = "failed connection !";
      $message_class = "";
   }else {
      session_start();
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['pseudo'] = $_POST['_email'];
      header('location:index.php');

   }
 }

?>
