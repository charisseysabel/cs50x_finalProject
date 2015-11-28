<?php
	/**
	 *	cashflow.php
	 *	configures the cashflow page.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get beginning cash on hand
	    $cash = [];
	    $getCash = query("SELECT cash_on_hand FROM users WHERE id = ?", $_SESSION["id"]);
	    if($getCash === false)
	    {
	        apologize("Error fetching beginning cash in hand.");
	    }
	    else
	    {
	        foreach($getCash as $cashData)
	        {
	            $cash[] = [
	                "cash_on_hand" => $cashData["cash_on_hand"]
	            ];
	        }
	    }
	    
	
	    $stats = [];	   
	    $getIncome = query("SELECT SUM(trans_amount) FROM transactions WHERE trans_category = 'income'");
	    if($getIncome === false)
	    {
	        apologize("Error fetching total income.");
	    }
	    else
	    {
            foreach($getIncome as $inc)
            {
                $stats[] = [
                    "SUM(trans_amount)" => $inc["SUM(trans_amount)"]
                ];
            }	    
	    }
	    
	    // get total expense
	    $getExpense = query("SELECT SUM(trans_amount) FROM transactions WHERE trans_category = 'expense'");
	    if($getExpense === false)
	    {
	        apologize("Error fetching total expenses.");
	    }
	    else
	    {
            foreach($getExpense as $exp)
            {
                $stats[] = [
                    "SUM(trans_amount)" => $exp["SUM(trans_amount)"]
                ];
            }
	    }
	    
	    // get ending cash
	    
	
		// render the custom hompage HTML
		render("cash_main.php", ["title" => "Cashflow", "cash" => $cash, "stats" => $stats] );
	}

?>
