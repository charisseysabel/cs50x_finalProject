<?php
    /**
     *  monthly_dtl_json.php
     *  monthly json data for cashflow tab
     */

    // configuration
	require("../includes/config.php");
	
	// all expenses variable
	$jan_Exp = $feb_Exp = $mar_Exp = $apr_Exp = $may_Exp = $jun_Exp = 0;
    $jul_Exp = $aug_Exp = $sep_Exp = $oct_Exp = $nov_Exp = $dec_Exp = 0;
	
	// all income variable
	$jan_Inc = $feb_Inc = $mar_Inc = $apr_Inc = $may_Inc = $jun_Inc = 0;
    $jul_Inc = $aug_Inc = $sep_Inc = $oct_Inc = $nov_Inc = $dec_Inc = 0;
	
	
	// select everything in transactions
	$getTotal = query("SELECT trans_amount, trans_category, trans_time FROM transactions WHERE id = ?", $_SESSION["id"]);
	if($getTotal === false)
	{
        apologize("Error fetching all transaction data");
	}
	
	// sort all transactions by category	
	for($i = 0; $i < count($getTotal); $i++)
	{
	    // access time and convert it
	        $date = strtotime($getTotal[$i]["trans_time"]);
            $newDate = date('M Y', $date);
            
        // access amount and convert it to an int
        $getInt = $getTotal[$i]["trans_amount"];
        $newInt = (int) $getInt;    
	    
	    // filter by transaction type
	    if($getTotal[$i]["trans_category"] == "Expense")
	    {        
	        // filter by month...
	        // Jan
	        if($newDate === "Jan 2015")
	        {
	            $jan_Exp += $newInt;
	        }
	        // feb
	        else if($newDate === "Feb 2015")
	        {
	            $feb_Exp += $newInt;
	        }
	        // mar
	        else if($newDate === "Mar 2015")
	        {
	            $mar_Exp += $newInt;
	        }
	        // april
	        else if($newDate === "Apr 2015")
	        {
	            $apr_Exp += $newInt;
	        }
	        // may
	        else if($newDate === "May 2015")
	        {
	            $may_Exp += $newInt;
	        }
	        // june
	        else if($newDate === "Jun 2015")
	        {
	            $jun_Exp += $newInt;
	        }
	        // july
	        else if($newDate === "Jul 2015")
	        {
	            $jul_Exp += $newInt;
	        }
	        // aug
	        else if($newDate === "Aug 2015")
	        {
	            $aug_Exp += $newInt;
	        }
	        // sept
	        else if($newDate === "Sep 2015")
	        {
	            $sep_Exp += $newInt;
	        }
	        //oct
	        else if($newDate === "Oct 2015")
	        {
	            $oct_Exp += $newInt;
	        }
	        //nov
	        else if($newDate === "Nov 2015")
	        {
	            $nov_Exp += $newInt;
	        }
	        // dec
	        else if($newDate === "Dec 2015")
	        {
	            $dec_Exp += $newInt;
	        } 	        
	    }
	    
	    // if category is type income...
	    else if($getTotal[$i]["trans_category"] == "income")
	    {
	        // filter by month...
	        // Jan
	        if($newDate === "Jan 2015")
	        {
	            $jan_Inc += $newInt;
	        }
	        // feb
	        else if($newDate === "Feb 2015")
	        {
	            $feb_Inc += $newInt;
	        }
	        // mar
	        else if($newDate === "Mar 2015")
	        {
	            $mar_Inc += $newInt;
	        }
	        // april
	        else if($newDate === "Apr 2015")
	        {
	            $apr_Inc += $newInt;
	        }
	        // may
	        else if($newDate === "May 2015")
	        {
	            $may_Inc += $newInt;
	        }
	        // june
	        else if($newDate === "Jun 2015")
	        {
	            $jun_Inc += $newInt;
	        }
	        // july
	        else if($newDate === "Jul 2015")
	        {
	            $jul_Inc += $newInt;
	        }
	        // aug
	        else if($newDate === "Aug 2015")
	        {
	            $aug_Inc += $newInt;
	        }
	        // sept
	        else if($newDate === "Sep 2015")
	        {
	            $sep_Inc += $newInt;
	        }
	        //oct
	        else if($newDate === "Oct 2015")
	        {
	            $oct_Inc += $newInt;
	        }
	        //nov
	        else if($newDate === "Nov 2015")
	        {
	            $nov_Inc += $newInt;
	        }
	        // dec
	        else if($newDate === "Dec 2015")
	        {
	            $dec_Inc += $newInt;
	        }
	    }	    	    
	}
   
    // expenses array containing all months
    $allMonths = array($jan_Exp, $feb_Exp, $mar_Exp, $apr_Exp, $may_Exp, $jun_Exp,
                        $jul_Exp, $aug_Exp, $sep_Exp, $oct_Exp, $nov_Exp, $dec_Exp,
                        $jan_Inc, $feb_Inc, $mar_Inc, $apr_Inc, $may_Inc, $jun_Inc,
                        $jul_Inc, $aug_Inc, $sep_Inc, $oct_Inc, $nov_Inc, $dec_Inc
                        );
                        
	//output as JSON
	    header("Content-type: application/json");
	    print(json_encode($allMonths, JSON_PRETTY_PRINT));

	
?>
