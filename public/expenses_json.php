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
	if($getExp !== false)
	{
	    $exp_json = $getExp;
	
	    // output as JSON
	    header("Content-type: application/json");
	    print(json_encode($exp_json, JSON_PRETTY_PRINT));
	}
?>
