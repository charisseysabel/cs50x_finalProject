<?php
    /**
     *  del_trans.php
     *  confirms to delete a clicked row from the transactions table
     */
     
    // configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get trans_name from URL
	    $toDel = $_GET['trans_name'];
	
	    $transToDel = [];
	    $fetchTrans = query("SELECT * FROM transactions WHERE trans_name = ?", $toDel);
	    if($fetchTrans === false)
	    {
	        apologize("Error fetching data to be deleted");
	    }
	    else
	    {
	        foreach($fetchTrans as $info)
	        {
                $transToDel[] = [
                    "trans_name" => $info["trans_name"],
                    "trans_category" => $info["trans_category"],
                    "trans_sub_cat" => $info["trans_sub_cat"],
                    "trans_amount" => $info["trans_amount"],
                    "trans_time" => $info["trans_time"]
                ];	        
	        }
	        
	        // render HTML
	        render("del_trans_form.php", ["title" => "Delete: $toDel", "transToDel" => $transToDel]);
	    }
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	    if(isset($_POST["delete"]) )
	    {
	        // remember transaction name
	        $del_trans = $_POST["trans_to_del"];
	        
	        $confirm_del = query("DELETE FROM transactions WHERE id = ? AND trans_name = ?", $_SESSION["id"], $del_trans);
	        if($confirm_del === false)
	        {
	            apologize("Unable to delete transaction.");
	        }
	        else
	        {
	            redirect("transactions.php");
	        }
	    }
	}
?>









