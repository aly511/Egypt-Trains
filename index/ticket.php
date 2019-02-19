
<!DOCTYPE html>
<html>
<head>
	<title>train</title>
	<link rel="stylesheet" href="pro.css">
	
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	
  if($_SERVER['REQUEST_METHOD'] == 'POST' )
  {
    $name = $_POST['name'];
    $ssd = $_POST['ssd'];
    $phone = $_POST['phone'];
    $train = $_POST['train'];
    $pay = $_POST['pay'];
    $sql = "INSERT INTO ticket (name, ssd, train,pay)
VALUES ('$name', '$ssd', '$train','$pay')";

if ($conn->query($sql) === TRUE) {
    ?>
	<div class="container-ticket">
		<h2 style="text-align: center;">Your Ticket is</h2>
		<table border="1" style="width:100%">
		  <tr>
		    <td>Name</td>
		    <td>SSD</td> 
		    <td>Phone</td>
		    <td>train Number</td>
		  </tr>
		  <tr>
		    <td><?php echo $_POST['name'];?></td>
		    <td><?php echo $_POST['ssd'];?></td> 
		    <td><?php echo $_POST['phone'];?></td>
		    <td><?php echo $_POST['train'];?></td>
		  </tr>
		</table>
	</div>
    <?php
} else {
    echo "Error in : " . $sql . "<br>" . $conn->error;
}

    
}else{
    header('Location: reserve.php');
    exit();
  }

$conn->close();
?>

<script src="jquery3.2.1.min.js"></script> 
    <script src="pro.js"></script>  
</body>
</html>
