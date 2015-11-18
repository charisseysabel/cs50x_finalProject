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
	
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
            // check for other errors
			if(empty($_POST["password"]) )
			{
				apologize("Please enter your old password.");
			}
			else if(empty($_POST["new_pw"]) )
			{
				apologize("Please enter a new password.");
			}
			else if(empty($_POST["confirmation"]) )
			{
				apologize("Please confirm your new password.");
			}
			else if(($_POST["new_pw"]) !== ($_POST["confirmation"]) )
			{
				apologize("New password inputs do not match.");
			}
			else if($_POST["new_pw"] === ($_POST["password"]) )
			{
				apologize("Old and new password match. Please try another one.");
			}
				
		// if input passes checkpoint...
			else if((!empty($_POST["password"])) && ($_POST["new_pw"] === $_POST["confirmation"]) )
			{
				$update_pw = query("UPDATE users SET hash = ? WHERE id = ?", crypt($_POST["new_pw"]), $_SESSION["id"] );
				if($update_pw === false)
				{
					apologize("Error updating password");
				}	
			}
		
		redirect("settings.php");
		   
        }
	    

?>
