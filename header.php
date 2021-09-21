<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">

            <h1 class="description">Share Market</h1>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">

                <img src="assets/img/Logo.jpg" height="143" width="150"/>
            </a>

        </div>


<?php
if(isset($_SESSION["islogin"]) || isset($_SESSION["isloginadmin"]))
{
?>
        <div class="right-div" id="1">
            <a href="logout.php" class="btn btn-danger pull-right">LOG ME OUT</a>
        </div>
<?php } ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Flat-Sliding-Top-Notification-Plugin-For-jQuery-overHang-js/lib/overHang.js"></script>
<script>
$("#1").click(function(){
		$("body").overHang({
			activity : "notification",
			message : "This is a notification message"
		})
	})
	</script>
