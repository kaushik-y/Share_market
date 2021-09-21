<?php
include 'connection.php';
session_start();
$page="Purchase";
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
    <title>Purchase Form</title>
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
                          <h2><b>Purchase Share</b></h2>
                        </div>
                        <div class="panel-body">

                          <?php
                          if(!isset($_REQUEST["purchaseid"]))
                          {
                            header('Location:index.php');
                          }


                          $totalcredit=0;
                          $totaldebit=0;

                          $result=mysqli_query($conn,"select * from tbl_parchage WHERE uid='".$_SESSION["id"]."'");
                          while($row=mysqli_fetch_assoc($result))
                          {
                              $totaldebit=$totaldebit+($row["qty"]*$row["price"]);
                          }

                            $result=mysqli_query($conn,"select * from tbl_wallet where uid='".$_SESSION["id"]."'");
                          while($row=mysqli_fetch_array($result))
                          {
                            $totalcredit=$totalcredit+$row["amt"];
                          }

                          $balace=($totalcredit-$totaldebit);

                            $result=mysqli_query($conn,"select * from tbl_price where sid='".$_REQUEST["purchaseid"]."'");
                          while($row=mysqli_fetch_array($result))
                          {
                           ?>
                            <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Enter Share Id</label>
                                            <input value="<?php echo $row["sid"]; ?>" class="form-control" readonly name="txtsid" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" name="txtqty" type="text" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" name="txtdescription" type="text" />
                                        </div>
                                <button type="submit" name="btnsub" class="btn btn-info">Submit</button>

                                    </form>
                                  <?php } ?>

                                  <?php
                                    if(isset($_REQUEST["btnsub"]))
                                    {

                                      $sid=$_REQUEST["txtsid"];
                                      $qty=$_REQUEST["txtqty"];
                                      $description=$_REQUEST["txtdescription"];
                                      if($sid=="")
                                      {
                                        echo "Please Enter Share Id";
                                      }
                                      else if($qty=="")
                                      {
                                        echo "Please Enter Quantity";
                                      }
                                      else if($description=="")
                                      {
                                        echo "Please Enter Description";
                                      }
                                      else
                                       {
                                         if($qty<=$_REQUEST["qty"])
                                         {
                                           if($balace<=($qty*$_REQUEST["price"]))
                                           {
                                             echo "Balance not available. Recharge first";
                                           }
                                           else {


                                            $result=mysqli_query($conn,"insert into tbl_parchage(sid,qty,description,price,uid) values ('$sid','$qty','$description','".$_REQUEST["price"]."','".$_SESSION["id"]."')")or die (mysqli_error($conn));
                                            if($result==true)
                                            {
                                                header('Location:Purchaseview.php');
                                            }
                                            else
                                            {
                                              echo "Not Added ";
                                            }
                                          }
                                        }
                                        else {
                                          echo "No Quantity Available";
                                        }
                                      }
                                    }
                                  ?>
                        </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
</div>
</div>
        </div>
     <!-- CONTENT-WRAPPER SECTION END-->

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
