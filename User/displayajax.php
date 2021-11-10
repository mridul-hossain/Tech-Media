<!DOCTYPE HTML>  
<html>
<head>

</head>
<body>  



<?php

$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'lab5_db');

$q= "select * from user_info";
$query= mysqli_query($con,$q);

if(mysqli_num_rows($query)>0)
{
	while($result= mysqli_fetch_array($query))
	{
?>	
	 <tr>
	
	  <td><?php  echo $result['Name'] ?></td>
	  <td><?php  echo $result['Email'] ?></td>
	  <td><?php  echo $result['Username'] ?></td>
	  <td><?php  echo $result['Password'] ?></td>
	  <td><?php  echo $result['ConfirmPass'] ?></td>
	  <td><?php  echo $result['Gender'] ?></td>
	 </tr>
	 
	 
<?php	
	}
}
?>

</body>
</html>