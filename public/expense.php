<?php
	/**
	 *	expense.php
	 *	configures the expense page.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{	
		// render the custom hompage HTML
		render("expense_main.php", ["title" => "Expense" ] );		
	}

?>
