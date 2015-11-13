<?php
	/**
	 *	login.php
	 *	loads the default home page for Balance
	 *
	 */

	// configuration
	require("../includes/config.php");
	require("../includes/render_log.php");

	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		// render the custom hompage HTML
		render("login_form.php", ["title" => "Log In"]);
	}

	// else if user reached page via POST
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// validate submission
		if(empty($_POST["username"]) )
		{
			apologize("Please provide a username.");
		}
		else if(empty($_POST["password"]) )
		{
			apologize("Please enter your password.");
		}

		// query database for user
		$rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"] );

		// if user found, check password
		if(count($rows) == 1)
		{
			$row = $rows[0];

			// compare hash
			if(crypt($_POST["password"], $row["hash"]) == $row["hash"] )
			{
				// log in user and store user's ID in session
				$_SESSION["id"] = $row["id"];

				// redirect to dashboard
				redirect("dashboard.php");
			}
		}
	}














?>
