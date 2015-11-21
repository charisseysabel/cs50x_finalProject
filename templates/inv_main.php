<!--
    inv_main.php
    main content for the inventory tab (HTML)
-->

<div class="mid">
    <h1>Inventory</h1>
        <div class="content">
            <!-- table buttons -->
                <div class="inv_btn">
                    <a href="add_form.php" type="button">Add</a>
                    
                    <select name="filter" id="filter" onchange="setFilter(this.value);">
		                    <option disabled selected value>Filter</option>
		                    <option value="allItems_ajax">All</option>
		                    <option value="caffe_ajax">Caffeteria</option>
		                    <option value="food_ajax">Food</option>
		                    <option value="drinks_ajax">Drinks</option>
		            </select>                   
                </div>
        
            <!-- search  -->

            <!-- TABLE -->
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
	                                <td>$ <?= $info["unit_price"] - $info["retail_price"] ?></td>


	                            </tr>
	                        <?php endforeach ?>


	                    </tbody>
                    </table>
              </div>
        </div>
</div>


