<?php
include 'connection.php';
session_start();
$page="Feedback";
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
    <title>Contact Form</title>
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

  <?php include 'menu.php';?>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">FEEDBACK_FORM</h4>

                            </div>

        </div>
             <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           FEEDBACK FORM
                        </div>
                        <div class="panel-body">
                          <?php
                            if(isset($_REQUEST["btnsub"]))
                            {
                              $name=$_REQUEST["txtname"];
                              $mobile=$_REQUEST["txtmobile"];
                              $email=$_REQUEST["txtemail"];
                              $ftext=$_REQUEST["txtfield"];

                              if($name=="")
                              {
                                echo "Please Enter name";
                              }
                              else if($mobile=="")
                              {
                                echo "Please Enter mobile";
                              }
                              else if($email=="")
                              {
                                echo "Please Enter email";
                              }
                              else if($ftext=="")
                              {
                                echo "Please Enter field";
                              }
                              else
                               {
                                $result=mysqli_query($conn,"insert into tbl_fback(name,mobile,email,ftext) values ('$name','$mobile','$email','$ftext')")or die (mysqli_error($conn));
                                if($result==true)
                                {
                                 echo "Thank you For Feedback";
                                }
                                else
                                {
                                  echo "Feedback Error";
                                }
                              }
                            }
                          ?>
                            <form role="form" method="post">

                                 <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" name="txtname" type="text" />

                                        </div>
                                  <div class="form-group">
                                           <label>Enter mobile No.</label>
                                            <input class="form-control" name="txtmobile" type="text" />

                                         </div>
                                  <div class="form-group">
                                              <label>Enter Email</label>
                                              <input class="form-control" name="txtemail" type="text" />

                                          </div>
                                  <div class="form-group">
                                            <label>Text Field</label>
                                            <textarea class="form-control" name="txtfield" rows="3"></textarea>
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
