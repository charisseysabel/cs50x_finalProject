<?php
	/**
	 *	transactions.php
	 *	configures the transactions page.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get all data in transactions database
	    $trans_all = [];
	    $getTrans = query("SELECT * FROM transactions WHERE id = ?", $_SESSION["id"] );
	    foreach($getTrans as $data)
	    {
	        $trans_all[] = [
	            "trans_name" => $data["trans_name"],
	            "trans_category" => $data["trans_category"],
	            "trans_sub_cat" => $data["trans_sub_cat"],
	            "trans_amount" => number_format($data["trans_amount"], 2),
	            "trans_time" => $data["trans_time"]
	        ];
	    }
	
		// render the custom hompage HTML
		render("trans_main.php", ["title" => "Transactions", "trans_all" => $trans_all ] );
	}

?>
