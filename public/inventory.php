<?php
	/**
	 *	inventory.php
	 *	configures the inventory page.
	 */
	
	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get all the info from the inventory database
	    $allInfo = [];
	    $getInfo = query("SELECT * FROM inventory WHERE id = ?", $_SESSION["id"] );
	    foreach($getInfo as $info)
	    {
	        $allInfo[] = [
	            "product" => $info["product"],
	            "unit_price" => number_format($info["unit_price"], 2),
	            "retail_price" => number_format($info["retail_price"], 2),
	            "supplier_name" => $info["supplier_name"],
	            "category" => $info["category"],
	        ];
	    }
	    
	
		// render the custom hompage HTML
		render("inv_main.php", ["title" => "Inventory", "allInfo" => $allInfo ] );
	}
	

?>


