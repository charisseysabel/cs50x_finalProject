<?php
    /**
     *  edit_trans.php
     *  configures the editing of an existing transaction data
     */
     
     // configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // remember which data
	    $toEdit = $_GET['trans_name'];
	
	    $allTrans = [];
	    // fetch product from database
	    $getTrans = query("SELECT * FROM `transactions` WHERE `trans_name` = ?", $toEdit );
	    if($getTrans === false)
	    {
	        apologize("Error fetching data");
	    }
	    else
	    {
	        foreach($getTrans as $info)
	        {
	            $allTrans[] = [
	                "trans_name" => $info["trans_name"],
	                "trans_category" => $info["trans_category"],
	                "trans_sub_cat" => $info["trans_sub_cat"],
                    "trans_amount" => number_format($info["trans_amount"], 2),
                    "trans_time" => $info["trans_time"]
	            ];
	        }
	    }
	    
	
	    // render the edit form
	    render("edit_trans_form.php", ["title" => "Edit: $toEdit", "allTrans" => $allTrans ] );
	}
	
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    if(isset($_POST["edit_trans"]) )
	    {
	        // remember name of transaction
	        $editTrans = $_POST["trans_to_edit"];
	        
	        // check transaction name
	        if(empty($_POST["trans_name"]) )
	        {
	            apologize("Please specify a name");
	        }
	        else
	        {
	            $add_trans_name = query("UPDATE transactions SET trans_name = ? WHERE trans_name = ?", $_POST["trans_name"], $editTrans);
	            if($add_trans_name === false)
	            {
	                apologize("Error adding transaction name.");
	            }
	        }
	        
	        // check transaction type
	        if(empty($_POST["main_cat"]) )
	        {
	            apologize("Please specify a transaction type");
	        }
	        else
	        {
	            $add_trans_type = query("UPDATE `transactions` SET `trans_category` = ? WHERE trans_name = ?", $_POST["main_cat"], $editTrans);
	            if($add_trans_type === false)
	            {
	                apologize("Error adding a transaction type");
	            }
	        }
	        
	        // check amount
	        if(empty($_POST["amt"]) || !is_numeric(intval($_POST["amt"])) )
	        {
	            apologize("Please specify an amount");
	        }
	        else if(!empty($_POST["amt"]) && is_numeric(intval($_POST["amt"])) )
	        {
	            $add_amt = query("UPDATE `transactions` SET `trans_amount` = ? WHERE `trans_name` = ?", $_POST["amt"], $editTrans);
	        }
	        
	        
	        // check income sub category
	        if(!empty($_POST["inc_sub_cat"]) )
	        {
	            $add_inc = query("UPDATE `transactions` SET `trans_sub_cat` = ? WHERE `trans_name` = ?", $_POST["inc_sub_cat"], $editTrans);
	            if($add_inc === false)
	            {
                    apologize("Error adding income transaction sub category");	        
	            }
	        }
	        
	        // check expense sub category
	        if(!empty($_POST["exp_sub_cat"]) )
	        {
	            $add_exp = query("UPDATE `transactions` SET `trans_sub_cat` = ? WHERE `trans_name` = ?", $_POST["exp_sub_cat"], $editTrans);
	            if($add_exp === false)
	            {
	                apologize("Error adding expense transaction sub category");
	            }
	        }
	
	
		    redirect("transactions.php");
	    }
	}

?>















