<?php
 include_once 'include/header.php';
 $reponseAdmin=$dbd->prepare('SELECT id_produit,description,detail,prix,image,image2,image3,image4,telephone,date,nom_willaya FROM produit,willaya  WHERE produit.willaya=willaya.ID_willaya AND id_produit=?');
 $reponseAdmin->execute(array($_GET['IDD_Prod']));
 $donnesAdmin=$reponseAdmin->fetch();
?>
<?php
//get values of form
//$description = $_POST['description'];
//$prix = $_POST['prix'];

//$detail = $_POST['detail'];
// update info of product
 function update_product(){
  global $dbd;
  $req=$dbd->prepare('UPDATE produit SET description = :description, prix = :prix, detail = :detail WHERE id_produit = $idProd ');
  $req->execute( array('description' => $_POST['description'] ,'prix' => $_POST['prix'] ,'detail' => $_POST['detail'] ));
  header('location:view.php');
}
 function delete_product($value=''){
  // code...
}
/*
if (isset($_POST['commitEnregister']) || isset($_POST['commitSupprimer'])){
  if ($_POST['commitEnregister']) {
    update_product();
  }
  if ($_POST['commitSupprimer']) {
    delete_product();
  }
}
*/

 ?>
   <div class="content-wrapper">
     <div class="container">
      <form class="" action="view.php" method="post">
        <div class="card text-center mb-3">
           <div class="card-header">
             Détails ID: <?php echo $donnesAdmin['id_produit']; ?>
           </div>
           <div class="card-body">
               <div class="row">
                 <section class="ml-3 col-xm-12">
                   <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="imagesProd/<?php echo $donnesAdmin['image'];?>" alt="Card image cap">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <div class="row no-gutters">
                                  <img class="img-thumbnail" src="imagesProd/<?php if(empty($donnesAdmin['image2'])){echo "image.png";}else{echo $donnesAdmin['image2'];} ?>" alt="" style="width: 3.5rem; height:3.5rem;">
                                  <img class="img-thumbnail" src="imagesProd/<?php if(empty($donnesAdmin['image3'])){echo "image.png";}else{echo $donnesAdmin['image3'];} ?>" alt="" style="width: 3.5rem; height:3.5rem;">
                                  <img class="img-thumbnail" src="imagesProd/<?php if(empty($donnesAdmin['image4'])){echo "image.png";}else{echo $donnesAdmin['image4'];} ?>" alt="" style="width: 3.5rem; height:3.5rem;">
                            </div>
                          </li>
                        </ul>
                        <div class="card-body">
                          <p class="card-text"><?php echo $donnesAdmin['description']; ?>.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><?php echo $donnesAdmin['prix']; ?> DA</li>
                          <li class="list-group-item"><i class="fa fa-phone" style="font-size:20px"></i> 0<?php echo $donnesAdmin['telephone']; ?></li>
                          <li class="list-group-item"><i class="fa fa-map-marker"></i> <?php echo $donnesAdmin['nom_willaya']; ?></li>
                          <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $donnesAdmin['date']; ?></li>
                        </ul>
                  </div>
                </section>
                <section class="m-3">
                     <div class="form-row m-2">
                       <div class="col">
                         <input type="text" class="form-control" name="description" placeholder="Description" value="<?php echo $donnesAdmin['description']; ?>">
                       </div>
                       <div class="col">
                         <input type="text" class="form-control" name="prix" placeholder="Prix en DA" value="<?php echo $donnesAdmin['prix']; ?>">
                       </div>
                     </div>
                     <div class="form-group form-group-lg">
                       <div class="">
                          <textarea class="form-control" name="detail" rows="5" placeholder="Details du produit" required><?php echo $donnesAdmin['detail']; ?></textarea>
                       </div>
                    </div>
                </section>
               </div>
               <input class="btn btn-success" type="submit" name="commitEnregister" value="Enregistrer">
               <input class="btn btn-danger" type="submit" name="commitSupprimer" value="Supprimer">
           </div>
      </div>
   </form>

     </div>
   </div>
<?php include_once 'include/footer.php'; ?>
