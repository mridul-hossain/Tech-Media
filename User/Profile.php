<!DOCTYPE HTML>
<html>  
<body>
<?php
	include 'HomeHeader.php';
	?>
	<label for="gsearch" align="left">Search people:</label>
  <input type="search" id="gsearch" name="gsearch">
  <input type="submit">
  <br>
  <br>
	<form action="Editcontrol.php">
	

<img src="../Media/1024px-Circle-icons-profile.svg.png" alt="Flowers in Chania" width="260" height="145"></img>
<br>

  <div  style="position: relative; padding-left: 4%">
  <input type="submit" value="Change profile picture" name="submit" >
</div>
</form>
<div style="position: relative">
			<h2>Personal Information</h2>
				<p>
				Name : Mr. X<br>
				School/college/ university<br>
				Workplace<br>
				Home town<br>
				followers<br>
				</p><br>
			<br>
			
		</div>
		
	
  <input type="submit" value="Edit Profile" name="submit">
    <input type="submit" value="Delete Profile" name="submit">
		 <a href="../post.php" style="position: relative; top: -90px;">POST</a>
		 
	<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>	 
</fieldset>
<?php
include 'Abid.php';
?>

</body>
</html>
