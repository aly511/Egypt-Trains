<?php require 'head.php';
   if (isset($_POST))
     {
		 $from_site=$_POST['from_site'];
		 $to_site =$_POST['to_site'];
		 $Classmm   =$_POST['Class'];
		 include_once('database.php');
		 echo'<!DOCTYPE html>
			  <head>
				 <title>تفاصيل القطارات</title>
				 <meta charset="utf-8">
				 <link rel="stylesheet" href="pro.css">

			  </head>
			  <body>
				';
		 if ($Classmm=="all")
			 $rows=$db->getRows("SELECT  * FROM train where from_site =? and to_site=? ",array($from_site,$to_site));
		 else
             $rows=$db->getRows("SELECT  * FROM train where from_site =? and to_site =? and classk =? ",array($from_site,$to_site,$Classmm));
		         echo' <div class="container-detail">
					 <div class="header-detail" align="center">   من  '.$from_site.' الى '.$to_site.'  يوجد  '.count($rows).'  قطار
					</div>';
         echo"
			 <table><tr cellspace=5px >
		                  <td>يقف فى </td> <td>الدراجة </td> <td>السرعة </td> <td>المدة</td> <td>وصول </td> <td>قيام </td> <td>القطار#</td><td>reserve</td>
					  </tr colspan=7><tr><span text='red' >ملاحظة :</span> يمكنك معرفة محطات الوقوف التى ستمر عليها  فى القطار عن طريق اللمس الرقم</tr>";
		 if(isset($rows))
		 {
			Foreach($rows as $data){
			 echo"<tr >  <td>".$data['number121']."
			                  <img class='image' src='arr.png'width=20px height=20px onmouseover='mouseOver()' onmouseout='mouseOut()'  >
							  ".  //$row=$db->getRow("SELECT  * FROM train where id =? limit 1 ",array($data['id'])); echo $row['name']  ."
						"</td>
						 <td>".$data['classk']."</td>  <td>".$data['speed']."</td>
			            <td>".$data['time1']."</td> <td>".$data['finsh_time']."</td>  <td>".$data['start_time']."</td>  <td>".$data['id']."</td>
                                    <td>
                                    <form method='post' action='reserve.php'>
                                    	<input type='hidden' name='trainnumber' value=".$data['id'].">
                                        <input type='submit'>
                                    </form>
                                    </td>
			     </tr>";
		    }
			echo"</table>
		";
			if(count($rows)<=0)
				{echo" not found any trains select other <br>    ";   }
		 }
		  }
else
       echo "</table>	not allowed to do thast";

?>
<!-- <div class='mycon-detail' id='mycon1'>
<?php      echo"<table border=1 cellspace=5px ><tr><td>يقف فى </td> <td> المحطات التى يمر بها فى الطريق</td><td>الدراجة </td> <td>السرعة </td> <td>المدة</td> <td>وصول </td> <td>قيام </td> <td>القطار#</td></tr>";
       Foreach($rows as $data){
		   echo"<tr >  <td>".$data['number121']."</td><td>". $data['name']  ."</td>
						 <td>".$data['classk']."</td>  <td>".$data['speed']."</td>
			            <td>".$data['time1']."</td> <td>".$data['finsh_time']."</td>  <td>".$data['start_time']."</td>  <td>".$data['id']."</td>
			     </tr>";
		    }
			echo"</table>";
	   
?>
</div> -->
<script>
  function mouseOver()
  {
	  var div = document.getElementById('mycon1');
	  div.style.visibility = 'visible';
  }
  function mouseOut()
  {
	  var div = document.getElementById('mycon1');
	  div.style.visibility = 'hidden';
  }
</script>
<br><br>
<a href='index.php'class='home-detail'>home</a>
 
<a href='  cancell.php 'class='home-detail'>cancel </a>
</div>
    <script src="jquery3.2.1.min.js"></script> 
    <script src="pro.js"></script>  
</body>
			</html>
