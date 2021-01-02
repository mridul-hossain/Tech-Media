<?php
require_once "../Controller/Home_Control.php";

$postData = fetchAllPosts();
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
	<form method="post" action="../Controller/Dashboard_Control.php">
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
				<div class="postCommentSeperator"></div>
				<?php foreach($commentData as $i=>$cData): if($cData['post_id'] == $data['id']){ ?>
					<div class="postComment">
						<div class="postHeaderContent">
							<div>
								<?php $fileName="../Pictures/".$cData['image']; if(file_exists($fileName)){ ?>
									<td><img src="<?php echo $fileName; ?>" class="postCommentUserImage"></td>
								<?php }else{ ?>
									<td><img src="../Pictures/user.png" class="postCommentUserImage"></td>
								<?php } ?>
							</div>
							<div class="postHeaderText">
								<label class="postCommentName"><?php echo $cData["name"] ?></label>
								<label class="postCommentTime"><?php echo $cData["time"] ?></label>
							</div>
						</div>
						<div>
							<p><?php echo $cData["text"] ?></p>
						</div>
						<input type="hidden" name="commentId" value="<?php echo $cData['id'] ?>">
						<input type="submit" name="hideComment" value="Hide Comment" class="commentHideButton">
					</div>
					<?php } ?>
				<?php endforeach; ?>
				<input type="hidden" name="postId" value="<?php echo $data['id'] ?>">
				<div class="commentDivHideButton">
					<input type="submit" name="hidePost" value="Hide Post" class="postHideButton">
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