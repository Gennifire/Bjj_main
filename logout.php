<?php
	session_start();
	session_destroy();

	// go back to the login1.php page, using JAVASCRIPT
	echo("<script>window.location.replace('logIn.php');</script>");  // redirects  
?>