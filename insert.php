<?php
include 'connection.php';
session_start();
$page="insert";
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
    <title>INSERT FORM</title>
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
                          <h2><b>Add_Share's</b></h2>
                        </div>
                        <div class="panel-body">
                          <?php
                            if(isset($_REQUEST["btnsub"]))
                            {

                              $scode=$_REQUEST["txtscode"];
                              $sname=$_REQUEST["txtname"];
                              $description=$_REQUEST["txtdescription"];
                              $company=$_REQUEST["txtcompany"];
                              $type=$_REQUEST["txttype"];
                              $isactive=$_REQUEST["txtis"];
                              $qty=$_REQUEST["txtqty"];
                              $price=$_REQUEST["txtprice"];


                              if($scode=="")
                              {
                                echo "Please Enter scode";
                              }
                              else if($sname=="")
                              {
                                echo "Please Enter sname";
                              }
                              else if($description=="")
                              {
                                echo "Please Enter Description";
                              }
                              else if($company=="")
                              {
                                echo "Please Enter company";
                              }
                              else if($type=="")
                              {
                                echo "Please Enter type";
                              }
                              else if($isactive=="")
                              {
                                echo "Please Enter isactive";
                              }
                              else if($qty=="")
                              {
                                echo "Please Enter qty";
                              }
                              else if($price=="")
                              {
                                echo "Please Enter price";
                              }
                              else
                               {
                                $result=mysqli_query($conn,"insert into tbl_price(scode,sname,description,company,type,isactive,qty,price) values ('$scode','$sname','$description','$company','$type','$isactive','$qty','$price')")or die (mysqli_error($conn));
                                if($result==true)
                                {
                                    header('Location:Adminprice.php');
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
                                            <label>Enter Share Code</label>
                                            <input class="form-control" name="txtscode" type="text" />

                                        </div>
                                 <div class="form-group">
                                            <label>Enter Share Name</label>
                                            <input class="form-control" name="txtname" type="text" />

                                        </div>
                                  <div class="form-group">
                                           <label>Enter Description </label>
                                            <input class="form-control" name="txtdescription" type="text" />

                                         </div>
                                  <div class="form-group">
                                              <label>Enter company</label>
                                              <input class="form-control" name="txtcompany" type="text" />

                                          </div>
                                  <div class="form-group">
                                            <label>Enter Share Type</label>
                                            <select name="txttype">
                                              <option>Ordinary share</option>
                                              <option>Preference share</option>
                                              <option>Redeemable Share</option>
                                              <option>Non-Voting Ordinary share</option>
                                              <option>Cumuletive Preference Share</option>
                                            </select>
                                        </div>
                                  <div class="form-group">
                                                  <label>Enter IsAvctive</label>
                                                <input checked type="radio" name="txtis" value="yes" >Yes
                                                <input type="radio" name="txtis" value="no" >No

                                        </div>
                                  <div class="form-group">
                                                  <label>Enter Quantity</label>
                                                  <input class="form-control" name="txtqty">
                                        </div>
                                  <div class="form-group">
                                                  <label>Enter price</label>
                                                  <input class="form-control" name="txtprice">
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
