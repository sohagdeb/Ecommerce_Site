<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div>

                <!-- Main content -->
                <section class="content" style="height:400px;">
                    <div class="row">
                        <div class="col-sm-9 col-lg-12">
                            <?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img width="100%" src="images/banner1.jpg" alt="First slide">
                                    </div>
                                    <div class="item">
                                        <img width="100%" src="images/banner-2.jpg" alt="Second slide">
                                    </div>
                                    <div class="item">
                                        <img width="100%" src="images/banner3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                </a>
                            </div>





                            <section class="section gray-bg" id="blog">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 text-center">
                                            <div class="section-title">
                                                <h2>Products</h2>
                                                <hr>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="blog-grid">
                                                <div class="blog-img">

                                                    <a href="#">
                                                        <img width='350px' height='270px'
                                                            src="https://media.wired.com/photos/5fb2cc575c9914713ead03de/4:3/w_1777,h_1332,c_limit/Gear-Apple-MacBook-Air-top-down-SOURCE-Apple.jpg"
                                                            title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="blog-info">
                                                    <h5><a href="#">Laptop</a>
                                                    </h5>
                                                    <p>We have different variety of Laptops</p>
                                                    <div class="btn-bar">
                                                        <a href="category.php?category=laptops" class="px-btn-arrow">
                                                            <span>Shop Now</span>
                                                            <i class="arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="blog-grid">
                                                <div class="blog-img">

                                                    <a href="#">
                                                        <img width='350px' height='270px'
                                                            src="https://media.wired.com/photos/610050dc8eb98ab033ce45df/master/w_2400,h_1800,c_limit/Gear-Nokia-G20.jpg"
                                                            title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="blog-info">
                                                    <h5><a href="#">Smart Phone</a>
                                                    </h5>
                                                    <p>We have different variety of phones</p>
                                                    <div class="btn-bar">
                                                        <a href="category.php?category=phone" class="px-btn-arrow">
                                                            <span>Shop Now</span>
                                                            <i class="arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="blog-grid">
                                                <div class="blog-img">

                                                    <a href="#">
                                                        <img width='350px' height='270px'
                                                            src="https://media.gq-magazine.co.uk/photos/5f0841a9e3e1d005a7feee5e/master/pass/20200709-tablet-05.jpg"
                                                            title="" alt="">
                                                    </a>
                                                </div>
                                                <div class="blog-info">
                                                    <h5><a href="#">Tablet</a>
                                                    </h5>
                                                    <p>We have different variety of Tablets</p>
                                                    <div class="btn-bar">
                                                        <a href="category.php?category=tablets" class="px-btn-arrow">
                                                            <span>Shop Now</span>
                                                            <i class="arrow"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <?php include 'includes/footer.php'; ?>
                        </div>

                        <?php include 'includes/scripts.php'; ?>






</body>

</html>