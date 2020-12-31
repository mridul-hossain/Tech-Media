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

	<?php include 'editorHeader.php'; ?>
	<form method="post">

		<table class="postTable">
			<tbody>
				<div>
					<?php foreach($postData as $i=>$data): ?>
						<tr><td><?php echo $data["name"] ?></td></tr>
						<tr><td><?php echo $data["image"] ?></td></tr>
						<tr><td><?php echo $data["text"] ?></td></tr>
						<?php foreach($commentData as $i=>$cData): if($cData['post_id'] == $data['id']){ ?>
							<tr><td><?php echo $cData["name"] ?></td></tr>
							<tr><td><?php echo $cData["image"] ?></td></tr>
							<tr><td><?php echo $cData["text"] ?></td></tr>
						<?php } ?>
					<?php endforeach; ?>
				<?php endforeach; ?>
				</div>
			</tbody>
		</table>
	</form>
	<?php include "Footer.php"; ?>

</body>
</html>