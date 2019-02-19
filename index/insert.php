<!DOCTYPE html>
<head>
    <title>Add Data</title>
	<meta charset="utf-8"  >
</head>
<body>
   <!-- <a href="index.php">Home</a>-->
    <br/><br/>
    <form action="insert.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>start time</td>
                <td><input type="text" name="start_time" required></td>
            </tr>
            <tr>
                <td>finsh time</td>
                <td><input type="text" name="finsh_time" required></td>
            </tr>
            <tr>
                <td>time</td>
                <td><input type="text" name="time" required></td>
            </tr>
			<tr>
                <td>from site</td>
                <td><input type="text" name="from_site" required></td>
            </tr>
			<tr>
                <td>to site</td>
                <td><input type="text" name="to_site" required></td>
            </tr>
			<tr>
                <td>speed</td>
                <td><input type="text" name="speed" required></td>
            </tr>
			<tr>
                <td>Class</td>
				<td>
				    <select name="Class">
					         <option value="vip">vip</option>
							 <option value="مكيف">مكيف</option>
							 <option value="نوم">نوم</option>
							 <option value="اكسبريس بعربيات مطورة (ركاب)">اكسبريس بعربيات مطورة (ركاب)</option>
				    </select>
				</td>
                <!--<td><input type="text" name="Class" required></td>-->
            </tr>
			<tr>
                <td>number</td>
                <td><input type="text" name="number" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
 include('database.php');
if(isset($_POST['Submit'])) {
    	$start_time = $_POST['start_time'];
    	$finsh_time = $_POST['finsh_time'];
    	$time = $_POST['time'];
		$from_site = $_POST['from_site'];
		$to_site = $_POST['to_site'];
		$speed = $_POST['speed'];
		$Class = $_POST['Class'];
		$number = $_POST['number'];
		
		$db->exec("insert into train values('','$start_time','$finsh_time','$time','$from_site',
		         '$to_site','$speed','$Class',$number);");
		//$db->exec("insert into train values(?,?,?,?,?,?,?,?,?)",
		  //array('',$start_time,$finsh_time,$time,$from_site,
		        // $to_site,$speed,$Class,$number));
		//$sql= "insert into train values(?,?,?,?,?,?,?,?,?)";
    	//$int=$db->insertRow($sql,array('',$start_time,$finsh_time,$time,$from_site,
		        // $to_site,$speed,$Class,$number));
        //if($int >0){
        //display success message
   	     //echo "<font color='green'>Data added successfully.";
  	     //echo "<br/><a href='insert.php'>add new</a>";
        // }
         //else
          // echo "eroRRRRRRRRRRRRRRRRRRRR";
     }
?>

