<!DOCTYPE html>

<?php 
require_once "Model.php";
include "Up.php";
$users = showAllUsers();

?>

<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="userprofile.css">

</head>
<body> 

			
	    

          <div  class= "userTable">
	        <form>
	        	
	        		<h2 style="text-align:center" > My Profile</h2>
	        	    
	        		<table >
	        		
	        		<tbody>
	        			
						<?php foreach($users as $i=>$user): ?>
						
						     <tr>
	        					<td <?php echo '<img src="data:image;base64,'.base64_encode($user['Pic']).'"alt="image" style="width:100px;height:100px">'; ?></td>
							</tr>
	        				<tr>
	        					<td class="tableDesign">Name:<?php echo $user["Name"] ?></td>
							</tr>
							<tr>
	        					<td class="tableDesign">Email:<?php echo $user["Email"] ?></td>
							</tr>
                            <tr>							
	        					<td class="tableDesign">Username:<?php echo $user["Username"] ?></td>
							</tr>
                            <tr>
	        					<td class="tableDesign">Address:<?php echo $user["Address"] ?></td>
							</tr>
                            
                            <tr> 							
	        					<td class="tableDesign">Gender:<?php echo $user["Gender"] ?></td>
	        				</tr>
	        			<?php endforeach; ?>
	        		</tbody>
	        	</table>
	        	
	        </form>
			</div>


	       
	

</body>
</html>