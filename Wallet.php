<?php
include 'connection.php';
session_start();
$page="Wallet";
if(!isset($_SESSION["islogin"]))
{
    header('Location:index.php');
}
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
    <title>Wallet_Form</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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

        <div class="row pad-botm">
            <div class="col-md-12">

                <h4 class="header-line">Your_Wallet</h4>

                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                  <div style="text-align:right;">
                    <a href="insertwallet.php" style="background:#000000;color:#ffffff;padding:10px;">Add_Money</a>
                  </div>
                  <br/>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Share_Records
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">


                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
                                        <tr>
                                            <th>Wallet_Id</th>
                                            <th>User_Id</th>
                                            <th>Amount</th>
                                            <th>Remark</th>
                                            <th>Added_Date</th>
                                        </tr>
                                    </thead>
                                    <?php
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
                                     ?>
                                     <tr>

                                            <td><?php echo $row["wid"]; ?></td>
                                            <td><?php echo $row["uid"]; ?></td>
                                            <td><?php echo $row["amt"]; ?></td>
                                            <td><?php echo $row["remark"]; ?></td>
                                            <td><?php echo $row["date"]; ?></td>
                                     </tr>
                                    <?php } ?>
                                </table>

                                <?php echo "BALANCE : Rs.".($totalcredit-$totaldebit); ?>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            </div>
                <!-- /. ROW  -->

     <!-- CONTENT-WRAPPER SECTION END-->
    <?php include 'footer.php'; ?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
