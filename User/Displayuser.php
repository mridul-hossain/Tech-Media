<!DOCTYPE HTML>  
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<div>

<h1>Display User Information: </h1>
<br>
<br>
<button id="displaydata" class="btn btn-danger"> Diaplay </button>
<table class = " table table-striped table-bordered text-center">
<thead>
<th> Name <br></th>
<th> Email <br> </th>
<th> Username <br> </th>
<th> Password <br> </th>
<th> ConfirmPass <br> </th>
<th> Gender <br>  </th>
</thead>
<tbody id="response">
</tbody>
</table>
</div>
 
 <script>
 $('#displaydata').click(function(){
	 
	 $.ajax({
		 url :'displayajax.php',
		 type: 'post',
		 
		 success:function(responsedata){
			 $('#response').html(responsedata);
			 
		 }
		 
		 
	 });
	 
	 
 });
 
 
 </script>
</body>
</html>