<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">

                      <?php
                      if(isset($_SESSION["islogin"]))
                      {
                       ?>
                       <li><a href="index.php"<?php  if($page=="index") {?> class="menu-top-active" <?php } ?>>Home</a></li>

                       <li><a href="about.php"<?php  if($page=="about") {?> class="menu-top-active" <?php } ?>>About US</a></li>
                       <li><a href="shareprice.php" <?php  if($page=="Shareprice") {?> class="menu-top-active" <?php } ?>>Share Price</a></li>
                       <li><a href="Wallet.php"<?php  if($page=="Wallet") {?> class="menu-top-active" <?php } ?>>Wallet</a></li>
                        <li><a href="Purchaseview.php"<?php  if($page=="Purchaseview") {?> class="menu-top-active" <?php } ?>>Purchased Share's</a></li>
                         <li><a href="Feedback.php" <?php  if($page=="Feedback") {?> class="menu-top-active" <?php } ?>>FEEDBACK FORM</a></li>

                     <?php } else if(isset($_SESSION["isloginadmin"])) {?>
                       <li><a href="index.php"<?php  if($page=="index") {?> class="menu-top-active" <?php } ?>>Home</a></li>
                       <li><a href="about.php"<?php  if($page=="about") {?> class="menu-top-active" <?php } ?>>About US</a></li>
                       <li><a href="Feedback.php" <?php  if($page=="Feedback") {?> class="menu-top-active" <?php } ?>>FEEDBACK FORM</a></li>
                        <li><a href="Adminprice.php"<?php  if($page=="Adminprice") {?> class="menu-top-active" <?php } ?>>Admin price</a></li>

                     <?php } else { ?>

                       <li><a href="index.php"<?php  if($page=="index") {?> class="menu-top-active" <?php } ?>>Home</a></li>

                       <li><a href="about.php"<?php  if($page=="about") {?> class="menu-top-active" <?php } ?>>About US</a></li>
                         <li><a href="Feedback.php" <?php  if($page=="Feedback") {?> class="menu-top-active" <?php } ?>>FEEDBACK FORM</a></li>
                         <li><a href="Registation.php"<?php  if($page=="Registation") {?> class="menu-top-active" <?php } ?>>Register</a></li>
                         <li><a href="Adminlogin.php"<?php  if($page=="Adminlogin") {?> class="menu-top-active" <?php } ?>>Admin Login</a></li>
                     <?php } ?>



                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
