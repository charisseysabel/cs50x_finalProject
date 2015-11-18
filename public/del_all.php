<?php
	/**
	 *	del_all.php
	 *	deletes current account from database.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_home.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"]) )
        {
            apologize("Please provide your username");
        }
        else if(empty($_POST["password"]) )
        {
            apologize("Please provide your password");
        }
        
        // query database for user
        $rows = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);
    
        // if user found, check password
        if(count($rows) == 1)
        {
            $row = $rows[0];
            
            // double check the password
            if(crypt($_POST["password"], $row["hash"]) == $row["hash"] )
            {
                $del_User = query("DELETE FROM users WHERE id = ?", $_SESSION["id"]);
			    if($del_User === false)
			    {
			        apologize("Cannot delete user");
			    }
			
			    // redirect to homepage
                redirect("/");    
            }
        }
        
    
    	


    
    }

?>
