<?php
    /**
     *  income_ajax.php
     *  transactions tab - renders a table using ajax with the category 'income'
     */

    // configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
	// if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get all income-related info from transactions database
	    $allIncome = [];
	    $getIncome = query("SELECT * FROM `transactions` WHERE `id` = ? AND `trans_category` = 'income'", $_SESSION["id"] );
	    foreach($getIncome as $data)
	    {
	        $allIncome[] = [
	            "trans_name" => $data["trans_name"],
	            "trans_category" => $data["trans_category"],
	            "trans_sub_cat" => $data["trans_sub_cat"],
	            "trans_amount" => $data["trans_amount"],
	            "trans_time" => $data["trans_time"]
	        ];
	    }
	
	}
?>

    <div id="trans_tbl">
			<table class="table table-striped">
				<thead>
					<tr>
					    <th>Transaction</th>
						<th>Category</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
				    
				<?php foreach($allIncome as $data): ?>
		            <tr>
		                <td><span id="trans_name"> <?= $data["trans_name"]?> </span> <br>
		                    <span id="trans_date"> <?= $data["trans_time"]?> </span>
		                </td>
		                
		                <td> <?= $data["trans_sub_cat"] ?> <br>
		                    <span id="trans_cat"><?= $data["trans_category"] ?></span>
		                </td>
		                <td>$ <?= $data["trans_amount"] ?> </td>
		            </tr>		        
		        <?php endforeach ?>
			</table>
		</div>
