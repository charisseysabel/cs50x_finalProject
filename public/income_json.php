<?php
    /**
     *  json.php
     *  sample test to generate json data from balance databases
     */

    // configuration
	require("../includes/config.php");
	
	$users = [];
	
	// search database
	$search = query("SELECT trans_name, trans_sub_cat, trans_amount, trans_time FROM `transactions` WHERE `id` = ? AND trans_category = 'income'", $_SESSION["id"]);
	if($search === false)
	{
	    apologize("Error fetching income transactions");
	}
	
	foreach($search as $value)
	{
	    $users[] = [
	        "trans_name" => $value["trans_name"],
	        "trans_sub_cat" => $value["trans_sub_cat"],
	        "trans_amount" => $value["trans_amount"],
	        "trans_time" => date('M Y', strtotime($value["trans_time"]))
	    ];
	}
		
	    // output as JSON
	    header("Content-type: application/json");
	    print(json_encode($users, JSON_PRETTY_PRINT));
	
?>
