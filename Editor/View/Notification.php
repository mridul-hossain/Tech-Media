<?php
require_once "../Controller/Home_Control.php";

$postData = fetchAllPendingPosts();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">
</head>
<body>

	<?php include 'editorHeader.php'; ?>
	<form method="post" action="../Controller/Dashboard_Control.php">
		<div class="dashboardDiv">
			<?php include "Sidebar.php"; ?>
			<div class="dashboardDivPosts">
			<?php foreach($postData as $i=>$data): ?>
			<div>
				<div class="postMainDiv">
				
				<label><?php echo $data['name'] ?>'s post need approval.</label>
				
			</div>
			</div>
	<?php endforeach; ?>
	</div>
</div>
</form>
<?php include "Footer.php"; ?>

</body>
</html>