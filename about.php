<?php
session_start();
$page="about";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php include 'Icon.php';?>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>About Us</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
   <?php include 'header.php'; ?>
     <!-- LOGO HEADER END-->
  <?php include 'menu.php'; ?>
     <!-- MENU SECTION END-->
   <div class="content-wrapper">
    <!--CAPG-->
          <div class="container">
         <div class="row pad-botm">
             <div class="col-md-12">
                 <h4 class="header-line">Information OF Shares</h4>

                             </div>

         </div>
            <div class="row">
                 <div class="col-md-4 col-sm-4">
                     <div class="panel panel-default">
                         <div class="panel-heading">
                             Ordinary Share
                         </div>
                         <div class="panel-body">
                             <p>Ordinary shares provide investors with voting rights (one vote per share) and represent proportionate ownership of a company.
                               Market forces, the value of the underlying business and investor sentiment determine the market value that investors pay for ordinary shares.</p>
Ordinary stock shareholders receive fluctuating dividend payments depending on a company’s performance.
Ordinary stock shareholders receive their dividend payment after preferred stock shareholders.
                         </div>

                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <div class="panel panel-primary">
                         <div class="panel-heading">
                           Non-Voting Ordinary share
                         </div>
                         <div class="panel-body">
                             <p>Non-voting stock is stock that provides the shareholder very little or no vote on corporate matters, such as election of the board of directors or mergers. This type of share is usually implemented for individuals who want to invest in the company’s profitability and success at the expense of voting rights in the direction of the company. Preferred stock typically has non-voting qualities. Non-voting stock may also thwart hostile takeover attempts. Many countries such as Germany, Russia, the United Kingdom</p>
                         </div>

                     </div>
                 </div>
                 <div class="col-md-4 col-sm-4">
                     <div class="panel panel-success">
                         <div class="panel-heading">
                             Redeemable Share
                         </div>
                         <div class="panel-body">
                             <p>The terms "redeemable shares" and "convertible shares" refer to different types of preferred stock. If a preferred stock is redeemable, it means that the issuing company can exchange those shares for cash, while convertible shares can be exchanged by the shareholder for common stock.The terms "redeemable shares" and "convertible shares" refer to different types of preferred stock. If a preferred stock is redeemable, it means that the issuing company can exchange those shares for cash.</p>
                         </div>

                     </div>
                 </div>
             </div>


             <!-- /. ROW  -->
     <div class="row">
         <div class="col-md-12">
             <div class="jumbotron">
                 <h1>Share Holders</h1>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
                 <p>

                 </p>
             </div>
         </div>
     </div>
   </div>
     <?php include 'footer.php'; ?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
