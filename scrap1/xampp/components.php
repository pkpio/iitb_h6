<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang">
		<link href="xampp.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php include "lang/".file_get_contents("lang.tmp").".php"; ?>
		&nbsp;<br>
		<h1><?php echo $TEXT['components-head']; ?></h1>

		<?php echo $TEXT['components-text1']; ?><p>
		<?php echo $TEXT['components-text2']; ?><p>

		<?php include("softwarelist.inc"); ?>

		<p>
		<?php echo $TEXT['components-text3']; ?>

		&nbsp;<p>&nbsp;<p>&nbsp;<p>
		&nbsp;<p>&nbsp;<p>&nbsp;<p>
	</body>
</html>
