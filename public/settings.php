<?php
	/**
	 *	settings.php
	 *	configures the settings page.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		// render the custom hompage HTML
		render("settings_main.php", ["title" => "Settings" ] );
	}

?>
