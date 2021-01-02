<?php
require_once "../Controller/Home_Control.php";

$postData = fetchAllPendingPosts();
$commentData = fetchAllCommentss();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Profile.css">
</head>
<body>

	<?php include 'editorHeader.php'; ?>
	<form method="post" action="../Controller/Approve_Control.php">
		<div class="dashboardDiv">
			<?php include "Sidebar.php"; ?>
			<div class="dashboardDivPosts">
			<?php foreach($postData as $i=>$data): ?>
			<div>
				<div class="postMainDiv">
				<div class="postHeader">
				<div class="postHeaderContent">
					<div>
						<?php $fileName="../Pictures/".$data['image']; if(file_exists($fileName)){ ?>
							<img src="<?php echo $fileName; ?>" class="postUserImage">
						<?php }else{ ?>
							<img src="../Pictures/user.png" class="postUserImage">
						<?php } ?>
					</div>
					<div class="postHeaderText">
						<label class="postHeaderName"><?php echo $data["name"] ?></label>
						<label class="postHeaderTime"><?php echo $data["time"] ?></label>
					</div>
				</div>
				<div class="postContent">
					<label class="postTitle"><?php echo $data["title"] ?></label>
					<p><?php echo $data["text"] ?></p>
				</div>
				</div>
				<input type="hidden" name="postId" value="<?php echo $data['id'] ?>">
				<div class="postCommentSeperator"></div>
				<div class="commentDivHideButton">
					<input type="submit" name="approve" value="Approve" class="postApproveButton">
					<input type="submit" name="remove" value="Remove" class="postHideButton">
				</div>
			</div>
			</div>
	<?php endforeach; ?>
	</div>
</div>
</form>
<?php include "Footer.php"; ?>

</body>
</html>