<?php
	require_once('admin/phpscripts/init.php');

	if(isset($_GET['id'])) {
		$tbl = "tbl_images";
		$col = "images_id";
		$id = $_GET['id'];
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
</head>
<body>
<?php

	if(!is_string($getSingle)){
		$row = mysqli_fetch_array($getSingle);
			echo "<img src=\"images/{$row['images_thumb']}\" alt=\"{$row['images_title']}\">
				 <h2>{$row['images_title']}</h2>
				 <a href=\"gallery.php\">Back...</a><br><br>";

	}else{
		echo "<p>{$getSingle}</p>";
	}

?>
</body>
</html>
