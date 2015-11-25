<?php

    /**
     *  caffe_ajax.php
     *  inventory tab - renders a table using ajax with a category 'caffeteria'
     */

	// configuration
	require("../includes/config.php");
	require("../includes/render_dash.php");
	
    // if user reached page via GET...
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
	    // get all the info from the inventory database
	    $allInfo = [];
	    $getInfo = query("SELECT * FROM `inventory` WHERE id = ? ", $_SESSION["id"] );
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
			                    <th title="The name of your product">Product Name</th>
			                    <th title="The category in which your product belongs.">Category</th>
			                    <th class="amount" title="Unit price is the cost of one unit of measure of an item.">Unit Price</th>
			                    <th class="amount" title="Retail price is the price of your product when it is sold for consumption.">Retail Price</th>
			                    <th class="amount" title="Your profit for each unit.">Est. profit per unit</th>			
			                    
		                    </tr>
	                    </thead>
	
	                    <tbody>
	                        <?php foreach($allInfo as $info): ?>
	                            <tr>
	                                <td> <span class="trans_name"><?= $info['product'] ?></span> <br>
	                                    <span class="trans_date"><?= $info["supplier_name"] ?></span>
	                                </td>

	                                <td> <?= $info["category"] ?> </td>
	                                <td class="amount">$ <?= $info["unit_price"] ?> </td>
	                                <td class="amount">$ <?= $info["retail_price"] ?> </td>
	                                <td class="amount">$ <?= number_format(($info["unit_price"] - $info["retail_price"]), 2) ?></td>
                                    <td> <span class="td_link"><a href="edit_inv.php?product=<?= $info['product']?>">Edit</a></span> <br>
                                         <span class="td_link"><a href="del_inv.php?product=<?= $info['product']?>">Delete</a></span>
                                    </td>

	                            </tr>
	                        <?php endforeach ?>


	                    </tbody>
                    </table>
              </div>
