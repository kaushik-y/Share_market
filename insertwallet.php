<?php
include 'connection.php';
session_start();
$page="insertwallet";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Wallet Form</title>
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
        <?php include 'header.php';?>
        <?php include 'menu.php'; ?>

     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">


                            </div>

        </div>
             <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                          <h2><b>Your Wallet</b></h2>
                        </div>
                        <div class="panel-body">
                          <?php
                            if(isset($_REQUEST["btnsub"]))
                            {
                              $uid=$_REQUEST["txtuid"];
                              $amt=$_REQUEST["txtamt"];
                              $remark=$_REQUEST["txtremark"];
                              $date=$_REQUEST["txtdate"];
                              if($uid=="")
                              {
                                echo "Please Enter User Id";
                              }
                              else if($amt=="")
                              {
                                echo "Please Enter Amount";
                              }
                              else if($remark=="")
                              {
                                echo "Please Enter Remark";
                              }
                              else
                               {
                                $result=mysqli_query($conn,"insert into tbl_wallet(uid,amt,remark) values ('$uid','$amt','$remark')")or die (mysqli_error($conn));
                                if($result==true)
                                {
                                    header('Location:Wallet.php');
                                }
                                else
                                {
                                  echo "Not Added ";
                                }
                              }
                            }
                          ?>

                            <form role="form" method="post">
                                        <div class="form-group">
                                            <label>User Id</label>
                                            <input readonly class="form-control" value="<?php echo $_SESSION["id"]; ?>" name="txtuid" type="text" />

                                        </div>
                                 <div class="form-group">
                                            <label>Amount</label>
                                            <input class="form-control" name="txtamt" type="text" />

                                        </div>
                                  <div class="form-group">
                                           <label>Remark</label>
                                            <input class="form-control" name="txtremark" type="text" />
                                         </div>

                                <button type="submit" name="btnsub" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
</div>
        </div>
     <!-- CONTENT-WRAPPER SECTION END-->
  <?php include 'footer.php';?>
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
