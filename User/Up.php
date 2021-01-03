<!DOCTYPE html>
<!-- Created By CodingNepal -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Navbar</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/demo.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	
<script type="text/javascript" src="search.js"></script>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i  class="fas fa-bars"></i>
      </label>
      <label class="logo">TechMedia</label>
	  
		<i class="fas fa-search" id="svar"></i>
		
		<input class="search"type="text" name="search" placeholder="Search" onkeyup="userSearch(this.value)">
	
      <ul>
        <li><a class="active" href="dpuser.php">Profile</a></li>
        <li><a href="Dashboard.php">Dashboard</a></li>
        <li><a href="find.php">User</a></li>
        <li><a href="post.php">Post</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
	  
    </nav>
    <section></section>
  </body>
</html>
