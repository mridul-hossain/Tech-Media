<!DOCTYPE HTML>
<?php 

include "Up.php";

?>
<html> 
<head>

<link rel="stylesheet" type="text/css" href="post.css">
  
 </head>
<body>

	


       <form action="Controller/addpost.php" method="post">
		





<div class="post">
<h1 >Post</h1>


 <input class=" type="text" id="name" name="name" placeholder= "Enter your name" ><br><br>
<input type="text" id="title" name="title" placeholder= "Enter your title" ><br><br>

 <textarea id="text" name="text" placeholder= "Enter your Message"></textarea><br>
 
  
				

<br>
  
			
<input type="submit"  id="done" name="submit" value="done" >
<input type="submit"  id="post" name="post" value="post" >
<br>
              

</div>
</form>


<br>
<br>

</body>
</html>