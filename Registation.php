<?php
include 'connection.php';
$page="Registation";
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
    <title>Registation Form</title>
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
                    <h4 class="header-line">REGISTATION FORM</h4>
                </div>
            </div>
             <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Registation Form
                        </div>
                        <div class="panel-body">
                          <?php
                            if(isset($_REQUEST["btnsignup"]))
                            {
                              $name=$_REQUEST["txtname"];
                              $email=$_REQUEST["txtemail"];
                              $mobile=$_REQUEST["txtmobile"];
                              $pwd=$_REQUEST["txtpwd"];

                              if($name=="")
                              {
                                echo "Please Enter Name";
                              }
                              else if($email=="")
                              {
                                echo "Please Enter Email";
                              }
                              else if($mobile=="")
                              {
                                echo "Please Enter mobile";
                              }
                              else if($pwd=="")
                              {
                                echo "Please Enter password";
                              }
                              else
                              {
                                $sql=mysqli_query($conn,"select * from tbl_user where email='$email'");
                                if(mysqli_num_rows($sql)<=0)
                                {
                                    $result=mysqli_query($conn,"insert into tbl_user(name,email,mobile,password)values('$name','$email','$mobile','$pwd')");
                                    if($result==true)
                                    {
                                      echo "Successfully Register";
                                    }
                                    else {
                                      echo "Registration Error";
                                    }
                                }
                                else
                                {
                                  echo "Duplicate";
                                }
                            }
                          }
                          ?>
                            <form role="form" method="post">

                                 <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" name="txtname"  type="text" />
                                        </div>
                                        <div class="form-group">
                                                   <label>Enter Email</label>
                                                   <input class="form-control" name="txtemail" type="text" />
                                               </div>
                                               <div class="form-group">
                                                          <label>Enter Mobile</label>
                                                          <input class="form-control" name="txtmobile" type="text" />
                                                      </div>
                                            <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" name="txtpwd" type="password" />
                                        </div>
                                        <button type="submit" name="btnsignup" class="btn btn-danger">Register Now </button>

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
