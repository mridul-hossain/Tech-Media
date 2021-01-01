<?php
require_once "Controller/Home_Control.php";

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

	<?php include 'Header.php'; ?>
	<form method="post">
		<div class="dashboardDiv">
			<?php include "Sidebar.php"; ?>
			<?php foreach($postData as $i=>$data): ?>
			<div class="dashboardDivPosts">
				<div class="postMainDiv">
				<div class="postHeader">
				<div class="postHeaderContent">
					<div>
						<?php $fileName="Pictures/".$data['image']; if(file_exists($fileName)){ ?>
							<img src="<?php echo $fileName; ?>" class="postUserImage">
						<?php }else{ ?>
							<img src="user.png" class="postUserImage">
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
								<?php $fileName="Pictures/".$cData['image']; if(file_exists($fileName)){ ?>
									<td><img src="<?php echo $fileName; ?>" class="postCommentUserImage"></td>
								<?php }else{ ?>
									<td><img src="user.png" class="postCommentUserImage"></td>
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
					</div>
					<?php } ?>
				<?php endforeach; ?>
				<div class="commentDiv">
					<textarea name="commentText" class="commentTextArea"></textarea>
					<input type="submit" name="comment" value="Comment" class="profileTableButtonSave">
				</div>
			</div>
			</div>
	<?php endforeach; ?>
</div>
</form>
<?php include "Footer.php"; ?>

</body>
</html>