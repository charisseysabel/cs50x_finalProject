<?php

    /**
     *  drinks_ajax.php
     *  inventory tab - renders a table using ajax with a category 'drinks'
     */

	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
    // if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get all the info from the inventory database
	    $allInfo = [];
	    $getInfo = query("SELECT * FROM `inventory` WHERE id = ? AND `category` = 'drinks' ", $_SESSION["id"] );
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
	}

?>

				 <div id="inv_tbl">
                
                    <table class="table table-striped" id="tblSearch">
	                    <thead>
		                    <tr>
			                    <th>Product Name</th>
			                    <th>Supplier Name</th>
			                    <th>Category</th>
			                    <th>Unit Price</th>
			                    <th>Retail Price</th>
			                    <th>Est. profit per unit</th>			
			                    
		                    </tr>
	                    </thead>
	
	                    <tbody>
	                        <?php foreach($allInfo as $info): ?>
	                            <tr>
	                                <td> <?= $info['product'] ?> </td>
	                                <td> <?= $info["supplier_name"] ?> </td>
	                                <td> <?= $info["category"] ?> </td>
	                                <td>$ <?= $info["unit_price"] ?> </td>
	                                <td>$ <?= $info["retail_price"] ?> </td>
	                                <td>$ <?= number_format(($info["unit_price"] - $info["retail_price"]), 2 ) ?></td>
	                                <td> <span class="td_link"><a href="edit_inv.php?product=<?= $info['product']?>">Edit</a></span> </td>
                                    <td> <span class="td_link"><a href="del_inv.php?product=<?= $info['product']?>">Delete</a></span></td>

	                                
	                            </tr>
	                        <?php endforeach ?>


	                    </tbody>
                    </table>
              </div>
