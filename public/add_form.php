<?php
	/**
	 *	add_form.php
	 *	configures the cashflow page.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		// render the custom hompage HTML
		render("new_item.php", ["title" => "Add new item" ] );
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    //make sure all fields are filled
	    if(empty($_POST["productName"]) || empty($_POST["unitPrice"]) || empty($_POST["retailPrice"]) ||
	       empty($_POST["category"]) || empty($_POST["supName"]) || empty($_POST["supNumber"]) )
	    {
	            apologize("Please fill in all fields.");
	    }
	    // make sure fields requiring numbers are indeed, numbers
		else if( !is_numeric(intval($_POST["unitPrice"])) )
		{
			apologize("Unit price value is not a valid number.");
		} 
		else if(!is_numeric(intval($_POST["retailPrice"])) )
		{
			apologize("Retail price is not a valid number.");
		}
		else if(!is_numeric(intval($_POST["supNumber"])) )
		{
			apologize("Supplier's number is not a valid number.");
		}
		
		// then finally add the item into the inventory database
		$inv_update = query("INSERT INTO inventory (id, product, unit_price, retail_price, category, supplier_name, 
			supplier_contact) VALUES(?, ?, ?, ?, ?, ?, ?)",
			$_SESSION["id"], $_POST["productName"], $_POST["unitPrice"], $_POST["retailPrice"], $_POST["category"],
			$_POST["supName"], $_POST["supNumber"] );
		
		if($inv_update === false)
		{
			apologize("Error updating the database.");
		}
		
		redirect("inventory.php");
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}





















?>
