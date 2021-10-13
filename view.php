<?php
 include_once 'include/header.php';
 $reponseAdmin=$dbd->prepare('SELECT id_produit,description,detail,prix,image,image2,image3,image4,telephone,date,nom_willaya FROM produit,willaya  WHERE produit.willaya=willaya.ID_willaya AND id_produit=?');
 $reponseAdmin->execute(array($_GET['IDD_Prod']));
 $donnesAdmin=$reponseAdmin->fetch();
 // update info of product


?>
   <div class="content-wrapper">
     <div class="container">
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
                         <input type="text" class="form-control" placeholder="Description" value="<?php echo $donnesAdmin['description']; ?>">
                       </div>
                       <div class="col">
                         <input type="text" class="form-control" placeholder="Prix en DA" value="<?php echo $donnesAdmin['prix']; ?>">
                       </div>
                     </div>
                     <div class="form-group form-group-lg">
                       <div class="">
                          <textarea class="form-control" name="_detail" rows="5" placeholder="Details du produit" required><?php echo $donnesAdmin['detail']; ?></textarea>
                       </div>
                    </div>
                </section>

               </div>
               <a href="#" class="btn btn-success">Enregistrer</a>
               <a href="#" class="btn btn-danger">Supprimer</a>

           </div>
      </div>

     </div>
   </div>
<?php include_once 'include/footer.php'; ?>
