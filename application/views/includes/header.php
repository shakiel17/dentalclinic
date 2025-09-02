<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CLINIC SYSTEM | HERMOSILLA DENTAL CLINIC</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('design/assets/img/cliniclogo.jpg');?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('design/assets/img/cliniclogo.jpg');?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('design/assets/img/cliniclogo.jpg');?>">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?=base_url('design/assets/vendors/css/base/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('design/assets/vendors/css/base/elisyam-1.5.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('design/assets/css/owl-carousel/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('design/assets/css/owl-carousel/owl.theme.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('design/assets/vendors/css/base/elisyam-1.5.min.css');?>">
        <link rel="stylesheet" href="<?=base_url('design/assets/css/datatables/datatables.min.css');?>">
         <link rel="stylesheet" href="<?=base_url('design/assets/css/bootstrap-select/bootstrap-select.min.css');?>">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style>
            svg {
            width: 40px;
            height: 40px;
            cursor: pointer;
            }

            /* path, circle {
            stroke: #000;
            stroke-width: 2;
            transition: 0.2s;
            } */

            path:hover {
            opacity: 0.8;
            }
            .slice, .center {
            stroke: black;
            stroke-width: 4;
            cursor: pointer;
            }
            /* .slice:hover, .center:hover {
            fill: lightgray;
            } */
        </style>
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="<?=base_url('design/assets/img/cliniclogo.jpg');?>" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
         <!-- End Preloader -->