<?php
include 'connection.php';
session_start();
$page="update";
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
                          <h2><b>Updating Share</b></h2>
                        </div>
                        <div class="panel-body">
                          <?php
                            if(isset($_REQUEST["btnsub"]))
                            {
                              $sid=$_REQUEST["txtsid"];
                              $scode=$_REQUEST["txtscode"];
                              $sname=$_REQUEST["txtname"];
                              $description=$_REQUEST["txtdescription"];
                              $company=$_REQUEST["txtcompany"];
                              $type=$_REQUEST["txttype"];
                              $isactive=$_REQUEST["txtis"];
                              $qty=$_REQUEST["txtqty"];
                              $price=$_REQUEST["txtprice"];

                              if($sid=="")
                              {
                                echo "Please Enter sid";
                              }
                              else if($scode=="")
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
                                $result=mysqli_query($conn,"update tbl_price set scode='$scode',sname='$sname',description='$description',company='$company',type='$type',isactive='$isactive',qty='$qty',price='$price' where sid='".$_REQUEST["editid"]."'")or die (mysqli_error($conn));
                                if($result==true)
                                {
                                  echo "<script>window.location='Adminprice.php';</script>";
                                }
                                else
                                {
                                  echo "Not updated ";
                                }
                              }
                            }
                          ?>
                          <?php
                            $result=mysqli_query($conn,"select * from tbl_price where sid='".$_REQUEST["editid"]."'");
                          while($row=mysqli_fetch_array($result))
                          {
                           ?>
                            <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Enter Share Id</label>
                                            <input value="<?php echo $row["sid"]; ?>" class="form-control" name="txtsid" type="text" />

                                        </div>
                                        <div class="form-group">
                                            <label>Enter Share Code</label>
                                            <input value="<?php echo $row["scode"]; ?>" class="form-control" name="txtscode" type="text" />

                                        </div>
                                 <div class="form-group">
                                            <label>Enter Share Name</label>
                                            <input value="<?php echo $row["sname"]; ?>" class="form-control" name="txtname" type="text" />

                                        </div>
                                  <div class="form-group">
                                           <label>Enter Description </label>
                                            <input value="<?php echo $row["description"]; ?>" class="form-control" name="txtdescription" type="text" />

                                         </div>
                                  <div class="form-group">
                                              <label>Enter company</label>
                                              <input value="<?php echo $row["company"]; ?>" class="form-control" name="txtcompany" type="text" />

                                          </div>
                                  <div class="form-group">
                                            <label>Enter Share Type</label>
                                            <select  name="txttype" class="form-control">
                                              <option <?php if($row["type"]=="Ordinary share") {?> selected <?php } ?>>Ordinary share</option>
                                              <option <?php if($row["type"]=="Preference share") {?> selected <?php } ?>>Preference share</option>
                                              <option <?php if($row["type"]=="Redeemable Share") {?> selected <?php } ?>>Redeemable Share</option>
                                              <option <?php if($row["type"]=="Non-Voting Ordinary share") {?> selected <?php } ?>>Non-Voting Ordinary share</option>
                                              <option <?php if($row["type"]=="Cumuletive Preference Share") {?> selected <?php } ?>>Cumuletive Preference Share</option>
                                            </select>

                                        </div>
                                  <div class="form-group form-control">
                                                  <label>Is Active?</label>
                                                  <input value="yes" <?php  if($row["isactive"]=="yes") {?> checked <?php } ?> type="radio" name="txtis">Yes
                                                  <input value="no" <?php  if($row["isactive"]=="no") {?> checked <?php } ?> type="radio" name="txtis">No
                                        </div>
                                  <div class="form-group">
                                                  <label>Enter Quantity</label>
                                                  <input value="<?php echo $row["qty"]; ?>" class="form-control" name="txtqty">
                                        </div>
                                  <div class="form-group">
                                                  <label>Enter price</label>
                                                  <input value="<?php echo $row["price"]; ?>" class="form-control" name="txtprice">
                                  </div>


                                <button type="submit" name="btnsub" class="btn btn-info">Update</button>

                                    </form>
                                  <?php } ?>
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
