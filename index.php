<?php
include_once 'include/header.php';

$result = find_all_produit();
$nombres_produit = count_all_produit();
$nombres_users = count_all_users();
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Icon Cards-->
       <div class="row">
         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo htmlspecialchars($nombres_produit);?> Produit</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><?php echo htmlspecialchars($nombres_users);?> Utilisateur</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
       </div><!-- end row -->

       <div class="card mb-3">
               <div class="card-header">
                 <i class="fa fa-table"></i> Toutes les produit</div>
               <div class="card-body">
                 <div class="table-responsive">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                       <tr class="text-primary">
                         <th>Name</th>
                         <th>images</th>
                         <th>prix</th>
                         <th>phone</th>
                         <th>date</th>
                         <th>Paramètres</th>
                       </tr>
                     </thead>
                     <tfoot>
                       <tr class="text-primary">
                         <th>Name</th>
                         <th>images</th>
                         <th>prix</th>
                         <th>phone</th>
                         <th>date</th>
                         <th>Paramètres</th>
                       </tr>
                     </tfoot>
                     <tbody>
                       <?php
                          while($donnes=$result->fetch()){
                            $datelist= strtotime($donnes['date']);
                           ?>
                       <tr>
                         <td><?php echo htmlspecialchars($donnes['description']); ?></td>
                         <td><img class="img-thumbnail hh" src="imagesProd/<?php if(empty($donnes['image'])){echo "image.png";}else{ echo htmlspecialchars($donnes['image']);} ?>" alt=""></td>
                         <td><?php echo htmlspecialchars($donnes['prix']); ?></td>
                         <td>0<?php echo htmlspecialchars($donnes['telephone']); ?></td>
                         <td><?php echo htmlspecialchars($donnes['date']); ?></td>
                         <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn btn-secondary active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                </svg>
                              </label>

                              <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option2" autocomplete="off">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                              </label>
                              <label class="btn btn-secondary">
                                <input type="radio" name="options" id="option3" autocomplete="off">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                              </label>
                            </div>
                          </td>
                       </tr>
                     <?php
                          }
                         $result->closeCursor();
                      ?>
                     </tbody>
                   </table>
                 </div>
               </div>
               <div class="card-footer small text-muted">modifier le 11:59</div>
        </div>

    </div>
  </div>
<?php include_once 'include/footer.php'; ?>
