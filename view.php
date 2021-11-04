<?php
 include_once 'include/header.php';

   $reponseAdmin=$dbd->prepare('SELECT id_produit,description,detail,prix,image,image2,image3,image4,telephone,date,nom_willaya FROM produit,willaya  WHERE produit.willaya=willaya.ID_willaya AND id_produit=?');
   $reponseAdmin->execute(array($_GET['IDD_Prod']));
   $donnesAdmin=$reponseAdmin->fetch();
?>
   <div class="content-wrapper">
     <div class="container">
      <form class="" action="controller/view_post.php" method="post">
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
                       <div class="col">
                         <input class="form-control" type="text" name="id" value="<?php echo $donnesAdmin['id_produit']; ?>">
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
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Supprimer</button>
           </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title text-danger" id="exampleModalLabel">
             <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
              <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
             </svg>
           </h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
           <p>Really do you want delete the product?</p>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Non</button>
           <button type="submit" class="btn btn-outline-success"  name="commitSupprimer"><i class="fa fa-check"></i> Yes</button>
         </div>
       </div>
     </div>
   </div>
   </form>
     </div>
   </div>
<?php include_once 'include/footer.php'; ?>
