<!DOCTYPE HTML>
<?php 

include "Up.php";

session_start();


?>

<html> 
<head>

<link rel="stylesheet" type="text/css" href="postvali.css">
   <script type="text/javascript" src="post.js"></script>
 </head>
<body>

       <form action="Controller/addpost.php" method="post" enctype="multipart/form-data">
		





<div class="post">
<h1 >Post</h1>
<div class="profileImageDiv">
							<table>
								
								<tr><td><input type="file" name="image"></td></tr>
								
							</table>
						</div>	


 <input class=" type="text" id="name" name="name" placeholder= "Enter your name"onblur="nameValidation()" ><br><br>
 <label class="errMessage" id="nameErr1">Name cannot be empty.</label>
 
<input type="text" id="title" name="title" placeholder= "Enter your title" onblur="titleValidation()"><br><br>

<label class="errMessage1" id="nameErr2">Please give a title</label>

 <textarea id="text" name="text" placeholder= "Enter your Message"onblur="textValidation()"></textarea><br>
 
  <label class="errMessage2" id="nameErr3">Text cannot be empty.</label>
			
<br>
  <input type="submit"  id="done" name="save" value="save" >
			
<input type="submit"  id="done" name="submit" value="post" >

<br>


</div>
</form>


<br>
<br>

</body>
</html>