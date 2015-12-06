<?php
    /**
     *  expenses_json.php
     *  json data of expenses from transactions table
     */

    // configuration
	require("../includes/config.php");
	
	$exp_json = [];
	
	// search database
	$getExp = query("SELECT trans_time, trans_name, trans_sub_cat, trans_amount FROM `transactions` WHERE `id` = ? AND trans_category = 'expense'", $_SESSION["id"]);
	if($getExp === false)
	{
	    apologize("Error fetching income transactions");
	}
	
	foreach($getExp as $value)
	{
	    $exp_json[] = [
	        "trans_name" => $value["trans_name"],
	        "trans_sub_cat" => $value["trans_sub_cat"],
	        "trans_amount" => $value["trans_amount"],
	        "trans_time" => date('M Y', strtotime($value["trans_time"]))
	    ];
	}
	    // output as JSON
	    header("Content-type: application/json");
	    print(json_encode($exp_json, JSON_PRETTY_PRINT));
?>
