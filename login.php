<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: index.php');
  }
?>
<?php include 'includes/header.php'; ?>


<body>

    <div>
        <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>


        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <div class="col-lg-12 login-key">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-12 login-title">
                        LOGIN PAGE
                    </div>

                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form action="verify.php" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">EMAIL</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input name="password" type="password" class="form-control" i>
                                </div>

                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-6 login-btm login-text">
                                        <button type="submit" name="login"
                                            class="btn btn-outline-primary">LOGIN</button>
                                    </div>
                                    <div class="col-lg-6 login-btm login-button">

                                    </div>
                                </div>
                            </form>
                            <a href="signup.php" class="text-center">Register a new membership</a><br>
                            <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
            </div>
        </div>

        <?php include 'includes/scripts.php' ?>
</body>

</html>