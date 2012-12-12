<html>
	<head>
		<title>XAMPP webalizer</title>
		<link href="xampp.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		&nbsp;</p>
		<pre>
			<?php
				shell_exec("..\webalizer\webalizer.bat");
			?>
			<script>
				document.location = "/webalizer/";
			</script>
		</pre>
	</body>
</html>
