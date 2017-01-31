<?php
	$onion_url = "foobarbazqux.onion"; // Set appropriately
?>
<!DOCTYPE html>
<html>
<head>
<title>Redir POC</title>
<?php
	if ($_SERVER['HTTP_HOST'] !== $onion_url) {
?>
<style>
	.overlay {
		visibility: hidden;
	}
</style>
<link rel="stylesheet" type="text/css" href="http://<?php print "$onion_url"; ?>/redir.css">
</head>
<body>
<script src="http://<?php print "$onion_url"; ?>/redir.js"></script>
<div class="overlay">
<p>You are using Tor please use the <a href="http://<?php print "$onion_url"; ?>">Onion Service.</a></p>
</div>
<?php
	} else {
?>
</head>
<body>
<?php
	}
?>
<p>Content Goes Here...</p>
</body>
</html>
