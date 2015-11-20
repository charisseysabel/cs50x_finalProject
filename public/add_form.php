<?php
	/**
	 *	add_form.php
	 *	configures the added new item.
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
	    // make sure product name field is filled
	    if(empty($_POST["productName"]) )
	    {
	        apologize("Please provide a name");
	    }	
	    else
	    {
	        $add_product = query("INSERT INTO inventory (id, product) VALUES (?, ?)", $_SESSION["id"], $_POST["productName"] );
	        if($add_product === false)
		    {
			    apologize("Error updating the database.");
		    }
	    }
	    
	    // check unit price
	    if (!empty($_POST["unitPrice"]) && is_numeric(intval($_POST["unitPrice"])) )
	    {
	        $add_price = query("UPDATE inventory SET unit_price = ? WHERE product = ?", $_POST["unitPrice"], $_POST["productName"]);
	        if($add_price === false)
		    {
		    	apologize("Error adding unit price.");
		    }
	    }
	    
	    // check retail price
	    if (!empty($_POST["retailPrice"]) && is_numeric(intval($_POST["retailPrice"])) )
	    {
	        $add_retail = query("UPDATE inventory SET retail_price = ? WHERE product = ?", $_POST["retailPrice"], $_POST["productName"]);
	        if($add_retail === false)
		    {
		    	apologize("Error adding retail price.");
		    }
	    }
	   
	    // check category
	    if (!empty($_POST["category"]) )
	    {
	        $add_cat = query("UPDATE inventory SET category= ? WHERE product = ?", $_POST["category"], $_POST["productName"]);
	        if($add_cat === false)
		    {
		    	apologize("Error adding category.");
		    }
	    }
	    
	    // check supplier name
	    if (!empty($_POST["supName"]) )
	    {
	        $add_supName = query("UPDATE inventory SET supplier_name = ? WHERE product = ?", $_POST["supName"], $_POST["productName"]);
	        if($add_supName === false)
		    {
		    	apologize("Error adding supplier name.");
		    }
	    }
	    
/*	    // check supplier number
	    if (!empty($_POST["supNumber"]) && is_numeric($_POST["supNumber"]) )
	    {
	        $add_supNum = query("UPDATE inventory SET supplier_contact = ? WHERE product = ?", $_POST["supNumber"], $_POST["productName"]);
	        if($add_supNum === false)
		    {
		    	apologize("Error adding supplier number.");
		    }
	    }
*/
	
	
	
		redirect("inventory.php");
	
	}
?>
