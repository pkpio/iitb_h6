<?php
	function pagecode($beispiel) {
		global $TEXT;
		echo "<p><br><br><h3><i>source code</i></h3>";
		if ($beispiel == "") {
			$beispiel = $_SERVER['PHP_SELF'];
		}
		$f = htmlentities(file_get_contents(basename($beispiel)));
		echo "<form action=''><textarea cols='80' rows='10'>";
		echo $f;
		echo "</textarea></form>";
		echo "&nbsp;<p>";
		echo "&nbsp;<p>";
	}
?>
