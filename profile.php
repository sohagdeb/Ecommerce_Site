<?php include 'includes/session.php'; ?>
<?php
	if(!isset($_SESSION['user'])){
		header('location: index.php');
	}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div>

                <!-- Main content -->
                <section class="content">
                    <div>
                        <div>
                            <?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='callout callout-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}

	        			if(isset($_SESSION['success'])){
	        				echo "
	        					<div class='callout callout-success'>
	        						".$_SESSION['success']."
	        					</div>
	        				";
	        				unset($_SESSION['success']);
	        			}
	        		?>
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="col-sm-3">
                                        <img src="<?php echo (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg'; ?>"
                                            width="100%">
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h2>Name:</h1>
                                                    <h2>Email:</h1>
                                                        <h2>Contact Info:</h1>
                                                            <h2>Address:</h1>

                                            </div>
                                            <div class="col-sm-9">
                                                <h2><?php echo $user['firstname'].' '.$user['lastname']; ?>
                                                    <span class="pull-right">
                                                        <a href="#edit" class="btn btn-success btn-flat btn-sm"
                                                            data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
                                                    </span>
                                                </h2>
                                                <h2><?php echo $user['email']; ?></h2>
                                                <h2><?php echo (!empty($user['contact_info'])) ? $user['contact_info'] : 'N/a'; ?>
                                                </h2>
                                                <h2><?php echo (!empty($user['address'])) ? $user['address'] : 'N/a'; ?>
                                                </h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php include 'includes/footer.php'; ?>
                            <?php include 'includes/profile_modal.php'; ?>


                            <?php include 'includes/scripts.php'; ?>

</body>

</html>