<?php
    /**
     *  json.php
     *  sample test to generate json data from balance databases
     */

    // configuration
	require("../includes/config.php");
	
	$users = [];
	
	// search database
	$search = query("SELECT trans_sub_cat, trans_amount FROM `transactions` WHERE `id` = ? AND trans_category = 'income'", $_SESSION["id"]);
	if($search !== false)
	{
	    $users = $search;
	
	    // output as JSON
	    header("Content-type: application/json");
	    print(json_encode($users, JSON_PRETTY_PRINT));
	}
?>
