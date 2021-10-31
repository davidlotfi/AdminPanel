<?php
require_once ('C:\xampp\htdocs\doudouphp\github\admin\include\Connexion.php');

//get values of form

$description=$_POST['description'];
$prix=$_POST['prix'];
$detail=$_POST['detail'];
$Id=$_POST['id'];

update_product();
// update info of product
function update_product(){
 global $dbd;
 $req=$dbd->prepare('UPDATE produit SET description = :description, prix = :prix, detail = :detail WHERE id_produit = :Id');
 $req->execute( array('description' =>$_POST['description'] ,'prix' => $_POST['prix'] ,'detail' => $_POST['detail'] , 'Id' => $_POST['id']));
 echo "seccess update";
 //header('location:../view.php');
}
?>
