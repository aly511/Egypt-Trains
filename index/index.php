<?php
//require_once('createAll.php');
 include_once('database.php');
/*  	$rows=$db->getRows("SELECT from_site and to_site FROM train ",array()); 
	   $db->error();
        $country=array();	
         Foreach($rows as $data){
			 $aa=$data['from_site'];
			 if (!in_array($aa, $country))
				 $country[]=$data['from_site'];
			 if (!in_array($data['to_site'], $country))
				 $country[]=$data['to_site'];
		 }
		 var_export($country); */
		 
		 
?>
<html>
<!DOCTYPE html>
<head>
    <title>مصر</title>
	<meta charset="utf-8"  >
	<link rel="stylesheet" href="pro.css">
</head>
<body>
      <div class="all">
	     <?php require 'head.php';     ?> 
		 <div class="container-index">
		     
			 <form action="detail.php" method="post">
			    <div class="inp5-index"> <?php
				        $rows=$db->getRows("SELECT * from train group by from_site",array()); 
						 if(count($rows>0))
						    {
								echo"<select name='from_site'><option disabled>محطة المغادرة ...</option>";
								foreach($rows as $row)
								  {
									  echo"<option>".$row['from_site']."</option>";
								  }
								  echo"</select>";
							}
					 ?>
					</div>
				<!-- <input type="text" name="from_site" placeholder="محطة المغادرة ...">-->				      
				<div class="inp6-index">
				     <?php
				        $rows=$db->getRows("SELECT * from train group by to_site",array()); 
						 if(count($rows>0))
						    {
								echo"<select name='to_site'><optgroup label='محطة الوصول ...'>";
								foreach($rows as $row)
								  {
									  echo"<option>".$row['to_site']."</option>";
								  }
								  echo"</optgroup></select>";
							}
					 ?>
					</div>
			     <!--<input type="text" name="to_site"   placeholder="محطة الوصول ...">-->
				 
				 <div class="inp7-index">
			     <select name="Class">
				             <option value="all">عرض جميع الدرجات</option>
					         <option value="vip">vip</option>
							 <option value="مكيف">مكيف</option>
							 <option value="نوم">نوم</option>
							 <option value="اكسبريس بعربيات مطورة (ركاب)">اكسبريس بعربيات مطورة (ركاب)</option>
					</select>
				</div>
					<br><br>
			     <input class="btn btn-info btn-lg btn-block" type="submit" name="submit" value="عرض القطارات" >
			 
			 </form>
			 
		 </div>
	  </div>
	  <script src="jquery3.2.1.min.js"></script> 
	  <script src="pro.js"></script>  
</body>
</html>
