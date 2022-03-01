<?php 
  include 'includes/session.php';
  include 'includes/format.php'; 
?>

<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>


        <div class="content-wrapper" style="background-color:#837EE7;">

            <section class="content-header">
                <h1>
                    Dashboard
                </h1>

            </section>


            <section class="content">
                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>

                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color:orange;">
                            <div class="inner">
                                <?php
                $stmt = $conn->prepare("SELECT * FROM details LEFT JOIN products ON products.id=details.product_id");
                $stmt->execute();

                $total = 0;
                foreach($stmt as $srow){
                  $subtotal = $srow['price']*$srow['quantity'];
                  $total += $subtotal;
                }

                echo "<h3>&#36; ".number_format_short($total, 2)."</h3>";
              ?>
                                <p>Total Sales</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <a href="sales.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color:#42FB00;">
                            <div class="inner">
                                <?php
                $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM products");
                $stmt->execute();
                $prow =  $stmt->fetch();

                echo "<h3>".$prow['numrows']."</h3>";
              ?>

                                <p>Number of Products</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-barcode"></i>
                            </div>
                            <a href="products.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box" style="background-color:red;">
                            <div class="inner">
                                <?php
                $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users");
                $stmt->execute();
                $urow =  $stmt->fetch();

                echo "<h3>".$urow['numrows']."</h3>";
              ?>

                                <p>Number of Users</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="users.php" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


            </section>

        </div>


    </div>



    <?php include 'includes/scripts.php'; ?>

    <script>
    $(function() {
        $('#select_year').change(function() {
            window.location.href = 'home.php?year=' + $(this).val();
        });
    });
    </script>
</body>

</html>