 <?php
require 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>train</title>
	<link rel="stylesheet" href="pro.css">
</head>
<body>
	<div class="container-cancel">
		 <form id="register" method='POST' action="cancell.php">

            <div class="inp1-cancel" >
                <input type="text" class="form-control form-control-lg" autocomplete="off" required="required" name="ssd" placeholder="Enter your social security number"/>
            </div>

            <div class="inp2-cancel" >
                <input type="text" class="form-control form-control-lg" autocomplete="off" required="required" name="train" placeholder="Enter trian number"/>
            </div>

            <p id="error" style="color:red;"></p>
            <input class="btn btn-info btn-lg btn-block"  type="submit" name="sub"/>
          </form>
	</div>
	<script src="jquery3.2.1.min.js"></script>
    <script src="pro.js"></script>
</body>
</html>
<?php
if(isset($_POST['ssd'])){
echo "row deleted";
  $pdo= new database();
  $name=$_POST['ssd'];
  $train=$_POST['train'];
  $s="delete from ticket where ssd=$name";

  $pdo->Execute($s);
}

?>
