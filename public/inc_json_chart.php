<?php
    /**
     *  inc_json_chart.php
     *  json data of income from transactions table
     */

    // configuration
	require("../includes/config.php");
	
	$inc_json = [];
	
	// search database
	$getInc = query("SELECT trans_sub_cat, trans_amount FROM `transactions` WHERE `id` = ? AND trans_category = 'income'", $_SESSION["id"]);
	if($getInc !== false)
	{
	    $inc_json = $getInc;
	
	    // output as JSON
	    header("Content-type: application/json");
	    print(json_encode($inc_json, JSON_PRETTY_PRINT));
	}
?>
