<!DOCTYPE html>
<html>
<head>
	<title>train</title>
	<link rel="stylesheet" href="pro.css">
</head>
<body>
	<div class="container">
		 <form id="register"action="ticket.php" method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="inp1" >
                <input type="text" class="form-control form-control-lg" autocomplete="off" required="required" name="name" placeholder="Enter your name "/>
            </div>
            <div class="inp2" >
                <input type="number" class="form-control form-control-lg" autocomplete="off" required="required" name="ssd"  length='14' placeholder="Enter your social security number"/>
            </div>
            <div class="inp3" >
                <input type="number" class="form-control form-control-lg" autocomplete="off" required="required" name="phone" placeholder="Enter your phone number"/>
            </div>
            <div class="inp4" >
                <input type="number" class="form-control form-control-lg" autocomplete="off" required="required" name="train" value="<?php echo $_POST['trainnumber'];?>" readonly/>
            </div>
            <div class="inp5" >
	              <select  class="form-control form-control-lg" required="required"  name="pay" >
	                <option>Select Payment Method</option>
	                <option value="visa">visa</option>
	                <option value="paypal">paypal</option>

	              </select>
          </div> 
          <div class="inp6" >
                <input type="number" class="form-control form-control-lg" autocomplete="off" required="required" name="phone" placeholder="Enter your card number"/>
            </div>
            <p id="error" style="color:red;"></p>
            <input class="btn btn-info btn-lg btn-block"  type="submit" value="Reserve"/>                
          </form>
	</div>

	<script src="jquery3.2.1.min.js"></script> 
    <script src="pro.js"></script>  
</body>
</html>
