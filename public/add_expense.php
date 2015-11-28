<?php
	/**
	 *	add_trans.php
	 *	controls new transaction form.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		// render add new transaction form
		render("trans_expense_form.php", ["title" => "Add Expense" ] );
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    // check transaction name
	    if(empty($_POST["trans_name"]) )
	    {
	        apologize("Please specify a name");
	    }
	    else
	    {
	        $add_trans_name = query("INSERT INTO `transactions` (id, trans_name) VALUES(?, ?)", $_SESSION["id"], $_POST["trans_name"]);
	        if($add_trans_name === false)
	        {
	            apologize("Error adding transaction name.");
	        }
	    }
	    
	    // automaticall add transaction type (income)
	    $add_trans_type = query("UPDATE `transactions` SET `trans_category` = 'Expense' WHERE trans_name = ?", $_POST["trans_name"]);
	        if($add_trans_type === false)
	        {
	            apologize("Error adding a transaction type");
	        }
	    
	    // check amount
	    if(empty($_POST["amt"]) || !is_numeric(intval($_POST["amt"])) )
	    {
	        apologize("Please specify an amount");
	    }
	    else if(!empty($_POST["amt"]) && is_numeric(intval($_POST["amt"])) )
	    {
	        $add_amt = query("UPDATE `transactions` SET `trans_amount` = ? WHERE `trans_name` = ?", $_POST["amt"], $_POST["trans_name"]);
	    }
	    
	    
	    // check expense sub category
	    if(!empty($_POST["exp_sub_cat"]) )
	    {
	        $add_exp = query("UPDATE `transactions` SET `trans_sub_cat` = ? WHERE `trans_name` = ?", $_POST["exp_sub_cat"], $_POST["trans_name"]);
	        if($add_exp === false)
	        {
	            apologize("Error adding expense transaction sub category");
	        }
	    }
	    
		redirect("transactions.php");
	
	}
?>
