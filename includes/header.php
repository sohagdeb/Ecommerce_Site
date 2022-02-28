<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Shop</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Custom CSS -->
    <style type="text/css">
    .navbar-static-top {
        background-color: purple !important;
    }

    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg {
        background-color: #ebf4fa;
    }

    /* Blog 
---------------------*/
    .blog-grid {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .blog-grid .blog-img {
        position: relative;
        border-radius: 5px;
        overflow: hidden;
    }

    .blog-grid .blog-img .date {
        position: absolute;
        background: #3a3973;
        color: #ffffff;
        padding: 8px 15px;
        left: 0;
        top: 10px;
        font-size: 14px;
    }

    .blog-grid .blog-info {
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
        border-radius: 5px;
        background: #ffffff;
        padding: 20px;
        margin: -30px 20px 0;
        position: relative;
    }

    .blog-grid .blog-info h5 {
        font-size: 22px;
        font-weight: 500;
        margin: 0 0 10px;
    }

    .blog-grid .blog-info h5 a {
        color: #3a3973;
    }

    .blog-grid .blog-info p {
        margin: 0;
    }

    .blog-grid .blog-info .btn-bar {
        margin-top: 20px;
    }

    .px-btn-arrow {
        padding: 0 50px 0 0;
        line-height: 20px;
        position: relative;
        display: inline-block;
        color: #fe4f6c;
        -moz-transition: ease all 0.3s;
        -o-transition: ease all 0.3s;
        -webkit-transition: ease all 0.3s;
        transition: ease all 0.3s;
    }


    .px-btn-arrow .arrow {
        width: 13px;
        height: 2px;
        background: currentColor;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 25px;
        -moz-transition: ease right 0.3s;
        -o-transition: ease right 0.3s;
        -webkit-transition: ease right 0.3s;
        transition: ease right 0.3s;
    }

    .px-btn-arrow .arrow:after {
        width: 8px;
        height: 8px;
        border-right: 2px solid currentColor;
        border-top: 2px solid currentColor;
        content: "";
        position: absolute;
        top: -3px;
        right: 0;
        display: inline-block;
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }




    .footer-bs {
        background-color: purple;
        padding: 60px 40px;
        color: rgba(255, 255, 255, 1.00);
        margin-bottom: 20px;
        border-bottom-right-radius: 6px;
        border-top-left-radius: 0px;
        border-bottom-left-radius: 6px;
    }

    .footer-bs .footer-brand,
    .footer-bs .footer-nav,
    .footer-bs .footer-social,
    .footer-bs .footer-ns {
        padding: 10px 25px;
    }

    .footer-bs .footer-nav,
    .footer-bs .footer-social,
    .footer-bs .footer-ns {
        border-color: transparent;
    }

    .footer-bs .footer-brand h2 {
        margin: 0px 0px 10px;
    }

    .footer-bs .footer-brand p {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.70);
    }

    .footer-bs .footer-nav ul.pages {
        list-style: none;
        padding: 0px;
    }

    .footer-bs .footer-nav ul.pages li {
        padding: 5px 0px;
    }

    .footer-bs .footer-nav ul.pages a {
        color: rgba(255, 255, 255, 1.00);
        font-weight: bold;
        text-transform: uppercase;
    }

    .footer-bs .footer-nav ul.pages a:hover {
        color: rgba(255, 255, 255, 0.80);
        text-decoration: none;
    }

    .footer-bs .footer-nav h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 10px;
    }

    .footer-bs .footer-nav ul.list {
        list-style: none;
        padding: 0px;
    }

    .footer-bs .footer-nav ul.list li {
        padding: 5px 0px;
    }

    .footer-bs .footer-nav ul.list a {
        color: rgba(255, 255, 255, 0.80);
    }

    .footer-bs .footer-nav ul.list a:hover {
        color: rgba(255, 255, 255, 0.60);
        text-decoration: none;
    }

    .footer-bs .footer-social ul {
        list-style: none;
        padding: 0px;
    }

    .footer-bs .footer-social h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 3px;
    }

    .footer-bs .footer-social li {
        padding: 5px 4px;
    }

    .footer-bs .footer-social a {
        color: rgba(255, 255, 255, 1.00);
    }

    .footer-bs .footer-social a:hover {
        color: rgba(255, 255, 255, 0.80);
        text-decoration: none;
    }

    .footer-bs .footer-ns h4 {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 10px;
    }

    .footer-bs .footer-ns p {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.70);
    }

    @media (min-width: 768px) {

        .footer-bs .footer-nav,
        .footer-bs .footer-social,
        .footer-bs .footer-ns {
            border-left: solid 1px rgba(255, 255, 255, 0.10);
        }
    }



    /* Small devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        #navbar-search-input {
            width: 60px;
        }

        #navbar-search-input:focus {
            width: 100px;
        }
    }

    /* Medium devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        #navbar-search-input {
            width: 150px;
        }

        #navbar-search-input:focus {
            width: 250px;
        }
    }

    .word-wrap {
        overflow-wrap: break-word;
    }

    .prod-body {
        height: 300px;
    }

    .box:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .register-box {
        margin-top: 20px;
    }

    #trending {
        list-style: none;
        padding: 10px 5px 10px 15px;
    }

    #trending li {
        padding-left: 1.3em;
    }

    #trending li:before {
        content: "\f046";
        font-family: FontAwesome;
        display: inline-block;
        margin-left: -1.3em;
        width: 1.3em;
    }

    /*Magnify*/
    .magnify>.magnify-lens {
        width: 100px;
        height: 100px;
    }
    </style>

</head>