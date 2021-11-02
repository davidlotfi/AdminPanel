<?php
require_once ('C:\xampp\htdocs\doudouphp\github\admin\include\Connexion.php');


// update info of product
$message='';
function update_product(){
 global $dbd;
 $req=$dbd->prepare('UPDATE produit SET description = :description, prix = :prix, detail = :detail WHERE id_produit = :Id');
 $req->execute( array('description' =>$_POST['description'] ,'prix' => $_POST['prix'] ,'detail' => $_POST['detail'] , 'Id' => $_POST['id']));
 //echo "seccess update";
}
// delet porduct
function delete_product($value=''){
 global $dbd;
 $req=$dbd->prepare('DELETE FROM produit WHERE id_produit = :Id');
 $req->execute(array('Id'=>$_POST['id']));
 //echo "seccess delete";
}

if (isset($_POST['commitEnregister']) || isset($_POST['commitSupprimer'])){
  if (isset($_POST['commitEnregister'])) {
    update_product();
    $message='seccess update';
  }
  if (isset($_POST['commitSupprimer'])) {
    delete_product();
    $message='seccess delete';
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Alert Update</title>
  </head>
  <body>
     <div class="alert alert-success" role="alert">
        <?php echo $message; ?>
     </div>
  </body>
</html>
