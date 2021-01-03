<!DOCTYPE html>

<?php 
require_once "Model.php";
include "Up.php";
$users = showAllUsers();

?>

<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="CSS/userprofile.css">

</head>
<body> 

			
	    

          <div  class= "userTable">
		  
	        <form>
			<a href="ProfileEdit.php" target="_blank">Edit Profile</a> 
             
	        	<div id="normalTable">
	        		<h2 style="text-align:center" > My Profile</h2>
	        	    
	        		<table >
	        		
	        		<tbody>
	        			
						<?php foreach($users as $i=>$user): ?>
						       <tr>
									<td>
										<?php $fileName="Pictures/".$user['Pic']; if(file_exists($fileName)){ ?>
											<img src="<?php echo $fileName; ?>" class="profileImage"style="height:80px;weidth:80px;">
										<?php }else{?>
											<img src="abc.jpg" class="profileImage"style="height:80px;weidth:80px;">
										<?php }?> 
									</td>
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
	        	</div>
	        </form>
			</div>


	       
	

</body>
</html>