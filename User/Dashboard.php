<?php
require_once "Model.php";
echo "Welcome " . $_SESSION['username'];

include "Up.php";
$posts = showAllposts();
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>

<body>
	<div class="dash">
		<form>
			<table>
				<tbody>
					<?php foreach ($posts as $i => $post) : ?>
						<tr>
							<td <?php echo '<img src="data:image;base64,' . base64_encode($post['image']) . '"alt="image" style="width:100px;height:100px">'; ?></td> </tr> <tr>
							<td class="tableDesign">Name:<?php echo $post["Name"] ?></td>
						</tr>
						<tr>
							<td class="tableDesign"><?php echo $post["time"] ?></td>
						</tr>
						<tr>
							<td class="tableDesign">Title:<?php echo $post["title"] ?></td>
						</tr>
						<tr>
							<td class="tableDesign"><?php echo $post["text"] ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</form>
	</div>
</body>

</html>