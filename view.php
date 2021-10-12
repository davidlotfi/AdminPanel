<?php
 include_once 'include/header.php';
?>
   <div class="content-wrapper">
     <div class="container">
        <div class="card text-center">
           <div class="card-header">
             Détails
           </div>
           <div class="card-body">
               <div class="row">
                 <section class="ml-3 col-xm-12">
                   <div class="card" style="width: 14rem;">
                        <img class="card-img-top" src="imagesProd/image.png" alt="Card image cap">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                            <div class="row no-gutters">
                                  <img class="img-thumbnail" src="imagesProd/image.png" alt="" style="width: 3rem;">
                                  <img class="img-thumbnail" src="imagesProd/image.png" alt="" style="width: 3rem;">
                                  <img class="img-thumbnail" src="imagesProd/image.png" alt="" style="width: 3rem;">
                            </div>
                          </li>
                        </ul>
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                  </div>
                </section>
                <section class="m-3">
                     <div class="form-row m-2">
                       <div class="col">
                         <input type="text" class="form-control" placeholder="First name">
                       </div>
                       <div class="col">
                         <input type="text" class="form-control" placeholder="Last name">
                       </div>
                     </div>
                     <div class="form-group form-group-lg">
                       <div class="">
                          <textarea class="form-control" name="_detail" rows="5" required></textarea>
                       </div>
                    </div>
                </section>

               </div>


               <a href="#" class="btn btn-primary">Go somewhere</a>
           </div>
           <div class="card-footer text-muted">
            2 days ago
          </div>
      </div>
     </div>
   </div>


<?php include_once 'include/footer.php'; ?>
