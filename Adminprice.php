<?php
include 'connection.php';
session_start();
$page="Adminprice";
if(!isset($_SESSION["isloginadmin"]))
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
    <title>Share_Details</title>
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

                <h4 class="header-line">PRICE_TABLE</h4>

                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                  <div style="text-align:right;">
                    <a href="insert.php" style="background:#000000;color:#ffffff;padding:10px;">Add Share</a>
                  </div>
                  <br/>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Share_Records
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                              <?php
       if(isset($_REQUEST['act']))
       {
         if($_REQUEST['act']=='del')
         {
           $sid=$_REQUEST['del_sid'];
           mysqli_query($conn,"delete from tbl_price where sid='$sid'");
           header('Location:Adminprice.php');
         }
       }
    ?>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
                                        <tr>
                                            <th>Share_Id</th>
                                            <th>Share_Code</th>
                                            <th>Share_Name</th>
                                            <th>Description</th>
                                            <th>Company_Name</th>
                                            <th>Share_Type</th>
                                            <th>Is_Active</th>
                                            <th>Quantity</th>
                                            <th>Prices</th>
                                            <th>Delete</th>
                                            <th>Edit</th>


                                        </tr>
                                    </thead>
                                    <?php
                                      $result=mysqli_query($conn,"select * from tbl_price");
                                    while($row=mysqli_fetch_array($result))
                                    {
                                     ?>
                                     <tr>

                                            <td><?php echo $row["sid"]; ?></td>
                                            <td><?php echo $row["scode"]; ?></td>
                                            <td><?php echo $row["sname"]; ?></td>
                                            <td><?php echo $row["description"]; ?></td>
                                            <td><?php echo $row["company"]; ?></td>
                                            <td><?php echo $row["type"]; ?></td>
                                            <td><?php echo $row["isactive"]; ?></td>
                                            <td><?php echo $row["qty"]; ?></td>
                                            <td><?php echo $row["price"]; ?></td>
                                            <td><a href="Adminprice.php?act=del&del_sid=<?php echo $row['sid'];?>"> DELETE</a></td>
                                            <td><a href="update.php?editid=<?php echo $row['sid'];?>"> EDIT</a></td>

                                     </tr>
                                    <?php } ?>

                                </table>
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
