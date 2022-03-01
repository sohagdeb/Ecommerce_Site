<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>STAREDGE</title>
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


    /* login page start*/

    body {
        background: #222D32;
        font-family: 'Roboto', sans-serif;
    }

    .login-box2 {

        margin-top: 75px;
        height: auto;
        width: 50%;
        background: #1A2226;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }



    @media only screen and (max-width: 600px) {
        .login-box2 {
            width: 100%;
        }
    }


    .login-box {
        margin-top: 75px;
        height: auto;

        background: #1A2226;
        text-align: center;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }

    .login-key {
        height: 100px;
        font-size: 80px;
        line-height: 100px;
        background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .login-title {
        margin-top: 15px;
        text-align: center;
        font-size: 30px;
        letter-spacing: 2px;
        margin-top: 15px;
        font-weight: bold;
        color: #ECF0F5;
    }

    .login-form {
        margin-top: 25px;
        text-align: left;
    }

    input[type=text] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        margin-bottom: 20px;
        padding-left: 0px;
        color: #ECF0F5;
    }

    input[type=password] {
        background-color: #1A2226;
        border: none;
        border-bottom: 2px solid #0DB8DE;
        border-top: 0px;
        border-radius: 0px;
        font-weight: bold;
        outline: 0;
        padding-left: 0px;
        margin-bottom: 20px;
        color: #ECF0F5;
    }

    .form-group {
        margin-bottom: 40px;
        outline: 0px;
    }

    .form-control:focus {
        border-color: inherit;
        -webkit-box-shadow: none;
        box-shadow: none;
        border-bottom: 2px solid #0DB8DE;
        outline: 0;
        background-color: #1A2226;
        color: #ECF0F5;
    }

    input:focus {
        outline: none;
        box-shadow: 0 0 0;
    }

    label {
        margin-bottom: 0px;
    }

    .form-control-label {
        font-size: 10px;
        color: #6C6C6C;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .btn-outline-primary {
        border-color: #0DB8DE;
        color: #0DB8DE;
        border-radius: 0px;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .btn-outline-primary:hover {
        background-color: #0DB8DE;
        right: 0px;
    }

    .login-btm {
        float: left;
    }

    .login-button {
        padding-right: 0px;
        text-align: right;
        margin-bottom: 25px;
    }

    .login-text {
        text-align: left;
        padding-left: 0px;
        color: #A2A4A4;
    }

    .loginbttm {
        padding: 0px;
    }

    /* login page End*/












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

    .single-product {
        background-color: rgba(0, 0, 0, 0.082);
        padding-top: 10px;
        border-radius: 10px;
    }

    .full-box {
        height: 400px;

    }

    .single-product:hover {
        background-color: rgba(0, 0, 0, 0.85);
        color: white;
    }

    .product-name {
        color: white;
    }

    .box:hover .product-name {
        color: red;
    }






    .box {
        background-color: purple;
        transition: 1s;
        color: white;
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