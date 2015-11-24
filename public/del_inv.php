<?php
    /**
     *  del_inv.php
     *  confirms to delete a clicked row from the table
     */
     
     // configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	$toDel = $_GET['product'];
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    $delInfo = [];
	    $getDel = query("SELECT * FROM inventory WHERE product = ?", $toDel);
	    if($getDel == false)
	    {
	        apologize("Error fetching data to be deleted");
	    }
	    else
	    {
	        foreach($getDel as $info)
	        {
	            $delInfo[] = [
	                "product" => $info["product"],
	                "unit_price" => number_format($info["unit_price"], 2),
	                "retail_price" => number_format($info["retail_price"], 2),
	                "supplier_name" => $info["supplier_name"],
	                "category" => $info["category"]
	            ];
	        }
	    }
	
	
	        // render HTML
	        render("del_inv_form.php", ["title" => "Delete: $toDel", "delInfo" => $delInfo] );
    }
	
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    if(isset($_POST['delete']) )
	    {
	        $id = $_POST['delete_rec_id'];
            $ok_del = query("DELETE FROM inventory WHERE id = ? AND product = ?", $_SESSION[id], $id);
	        if($ok_del === false)
            {
                apologize("Error deleting data");        
            }
            else
            {
                redirect("inventory.php");
            }
	    }
	

        
	}

?>
