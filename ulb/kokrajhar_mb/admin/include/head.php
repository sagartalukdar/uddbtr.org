<?php 
session_start();
include '../classes/Crud.php';
$crud = new Crud();

if (empty($_SESSION['userType'])) {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('Location: login');  
   exit();
}
// elseif ($_SESSION['userType'] !== "ADMIN" && $_SESSION['this_user_MB'] !== "UDD") {
//    $_SESSION['errorLogin'] = "Access Denied!";
//    header('Location: login'); 
//    exit();
// }
 else{
   $userType=$_SESSION['userType'];

}

$filename = basename($_SERVER['PHP_SELF']);
$pathinfo = pathinfo($filename);
$pageName = basename($filename, '.' . $pathinfo['extension']);
$pageName = ucwords(str_replace("-", " ", $pageName)); 
$pageName = ucwords(str_replace("_", "", $pageName));
?>







<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $pageName;?>- UDD Admin</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">
    
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
   
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../../assets/images/logo/logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/card-analytics.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!-- <script src="assets/vendor/js/template-customizer.js"></script> -->

    <script src="assets/js/config.js"></script>
<link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
    <!-- Page CSS -->
    

    <!-- Helpers -->

    
<link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />

<link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />

</head>
<?php 
if($userType=="ADMIN"){
  $bg_menu_theme_color="#0a121a !important";
  $layout_bg_color="#0a121a";
  // $container_xxl_color="#e4f5ff !important";
    // $container_xxl_color="#ecbffd !important";
}else{
   
}

?>
<style type="text/css">
  .bg-menu-theme{
    background-color: <?php echo $bg_menu_theme_color; ?>;
  color: #c4cdd5;
  }
  .layout-navbar-fixed .layout-wrapper:not(.layout-horizontal) .layout-page::before{
    background-color: <?php echo $layout_bg_color; ?>;

  }
  

 

</style>