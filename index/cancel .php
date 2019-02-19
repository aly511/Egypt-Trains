<?php
require 'database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>train</title>
	<style type="text/css">
		.container{
			width: 50%;
			margin:10px auto;
			text-align: center;
			border: 1px solid gray;
		}
		.inp input{
			margin: 10px;
			width: 280px;
			height: 25px;
			padding: 4px 6px;

		}
		.inp select{
			margin: 10px;
			width: 298px;
			height: 33px;
			padding: 4px 6px;

		}
		.btn{
			width: 100px;
			padding: 10px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		 <form id="register"action="ticket.php" method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="inp" >
                <input type="text" class="form-control form-control-lg" autocomplete="off" required="required" name="ssd" placeholder="Enter your social security number"/>
            </div>

            <div class="inp" >
                <input type="text" class="form-control form-control-lg" autocomplete="off" required="required" name="train" placeholder="Enter trian number"/>
            </div>

            <p id="error" style="color:red;"></p>
            <input class="btn btn-info btn-lg btn-block"  type="submit" name="sub"/>
          </form>
	</div>
</body>
</html>
<?php
if(isset($_POST[ssd])){
echo "row deleted";
  pdo=new pdo();
  $s="delete from ticket where ssd=$_POST['ssd'] and train=$_POST['train']";
  pdo-> Execute($s);
}

?>
