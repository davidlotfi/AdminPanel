<?php
include_once('controller/login_post.php');
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>HabbidouPanel</title>
   <!-- Bootstrap core CSS-->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom fonts for this template-->
   <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <!-- Custom styles for this template-->
   <link href="css/sb-admin.css" rel="stylesheet">
 </head>
<body class="bg-dark">
  <div class="container">
    <div class="<?php echo $message_class;?>" role="alert">
      <?php echo $message_erro; ?>
    </div>
    <div class="card card-login mx-auto mt-5">

      <div class="card-header">HabbidouPanel</div>
      <div class="card-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" name="_email" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="_password" id="exampleInputPassword1" type="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input class="btn btn-primary btn-block" type="submit" name="commit" value="Login">
        </form>
        <div class="text-center"><br>
          <p class="d-block small">Copyright © Habbidou.com 2021</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>
