<?php
	/**
	 *	logout.php
	 *	configures the logout page.
	 */
	
	// configuration
	require("../includes/config.php");
	
	logout();
	
	redirect("/login.php");


?>
