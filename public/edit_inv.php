<?php
    /**
     *  edit_inv.php
     *  configures the editing of an existing inventory data
     */
     
     // configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // remember which data
	    $toEdit = $_GET['product'];
	    
	    $allProduct = [];
	    // fetch product from database
	    $getProduct = query("SELECT * FROM `inventory` WHERE `product` = ?", $toEdit );
	    if($getProduct === false)
	    {
	        apologize("Error fetching data");
	    }
	    else
	    {
	        foreach($getProduct as $info)
	        {
	            $allProduct[] = [
	                "product" => $info["product"],
	                "unit_price" => number_format($info["unit_price"], 2),
	                "retail_price" => number_format($info["retail_price"], 2),
	                "supplier_name" => $info["supplier_name"],
	                "category" => $info["category"]
	            ];
	        }
	    }
	    
	
	    // render the edit form
	    render("edit_inv_form.php", ["title" => "Edit: $toEdit", "allProduct" => $allProduct ] );
	}
	
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    if(isset($_POST["edit"]) )
	    {
	        $item = $_POST["edit_inv_item"];
	        
	        // make sure product name field is filled
	        if(empty($_POST["productName"]) )
	        {
	            apologize("Please provide a name");
	        }
	        else
	        {
                $editProduct = query("UPDATE inventory SET product = ? WHERE product = ?", $_POST["productName"], $item );
                if($editProduct === false)
                {
                    apologize("Error updating product name");
                }	    
	                
	        // check unit price
	        if(!empty($_POST["unitPrice"]) && is_numeric(intval($_POST["unitPrice"])) )
	        {
	            $editPrice = query("UPDATE `inventory` SET `unit_price` = ? WHERE `product` = ?", $_POST["unitPrice"], $item );
	            if($editPrice === false)
	            {
	                apologize("Error updating unit price");
	            }   
	        }
	        
	        // check retail price
	        if(!empty($_POST["retailPrice"]) && is_numeric(intval($_POST["retailPrice"])) )
	        {
	            $editRetail = query("UPDATE `inventory` SET `retail_price` = ? WHERE `product` = ?", $_POST["retailPrice"], $item );
	            if($editRetail === false)
	            {
	                apologize("Error updating retail price");
	            }
	        }
	        
	        // check category
	        if(!empty($_POST["category"]) )
	        {
	            $editCat = query("UPDATE `inventory` SET `category` = ? WHERE `product` = ?", $_POST["category"], $item );
	            if($editCat === false)
	            {
	                apologize("Error updating category");
	            }
	        }
	        
	        // check supplier name
	        if(!empty($_POST["supName"]) )
	        {
	            $editSupName = query("UPDATE `inventory` SET `supplier_name` = ? WHERE `product` = ?", $_POST["supName"], $item );
	            if($editSupName === false)
	            {
	                apologize("Error updating supplier name");
	            }
	        }
	
	    redirect("inventory.php");
	
	    }
	    }
	}
?>
