<?php
session_start();
$page="index";
include 'connection.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<?php include 'Icon.php';?>
    <title>Share Market - Home</title>
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
         <div class="container">
            <div class="row">

              <div class="col-md-8 col-sm-8 col-xs-12">
                    <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >

                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/img/sharemarket.png" alt="" />

                        </div>
                        <div class="item">
                            <img src="assets/img/sharemarket2.jpg" alt="" />

                        </div>
                        <div class="item">
                            <img src="assets/img/sharemarket1.jpg" alt="" />

                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example" data-slide-to="1"></li>
                        <li data-target="#carousel-example" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
              </div>

                 <div class="col-md-4 col-sm-4 col-xs-12">
                 <div class="panel panel-primary ">
                        <div class="panel-heading">
                            Login Here!
                        </div>
                        <div class="panel-body chat-widget-main">
                          <form role="form" method="post">
                            <?php
                            if(isset($_REQUEST["btnsubmit"]))
                            {
                              $email=$_REQUEST["txtemail"];
                              $pwd=$_REQUEST["txtpwd"];
                              $result=mysqli_query($conn,"select * from tbl_user where email='".$email."' and password='".$pwd."'");
                              if(mysqli_num_rows($result)<=0)
                              {
                                echo "Login Failed";
                              }
                              else {
                                while($row=mysqli_fetch_assoc($result))
                                {
                                  $_SESSION["id"]=$row["userid"];
                                  $_SESSION["name"]=$row["name"];
                                }
                                $_SESSION["islogin"]="true";
                                header('Location:Shareprice.php');
                              }
                            }

                            ?>
                               <div class="form-group">
                                          <label>Enter Email</label>
                                          <input class="form-control" name="txtemail" type="text" />
                                      </div>
                              <div class="form-group">
                                          <label>Password</label>
                                          <input class="form-control" name="txtpwd" type="password" />
                                      </div>


                                      <button  type="submit"  name="btnsubmit" class="btn btn-success">Login </button>

                                  </form>
                        </div>

                    </div>
				
             </div>
</div>
</div>



     <!-- CONTENT-WRAPPER SECTION END-->
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
