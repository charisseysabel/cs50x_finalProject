<?php
	/**
	 *	dashboard.php
	 *	configures the dashboard
	 *
	 */

	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");

    // if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    $queryUsers = query("SELECT username FROM users WHERE id = ?", $_SESSION["id"] );
	    $gotUser = $queryUsers[0]["username"];
	    
	    
		// render the custom hompage HTML
		render("dash_main.php", ["title" => "Dashboard", "user" => $gotUser ] );
	}

?>
