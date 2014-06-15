<?php
$header = "{$_SERVER['SERVER_PROTOCOL']} 403 Forbidden";
header($header);
?>
<!DOCTYPE html>
	<head><title><?=$header?></title></head>
	<body>
		<h1><?=$header?></h1>
		<p>You do not have permission to view this location</p>
	</body>
</html>
