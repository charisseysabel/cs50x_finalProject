<!--
    inv_main.php
    main content for the inventory tab (HTML)
-->

<div class="mid">
    <h1>Inventory</h1>
        <div class="content">
            <!-- table buttons -->
                <div class="tbl_btn">
                    <a href="add_form.php" class="btn btn-default" type="button">Add</a>
                    <input type="button" value="Delete" class="btn btn-default" id="delete" name="delete" formaction="inventory.php"/>
                    
                    <select class="form-control" name="filter" id="filter" onchange="setFilter(this.value);">
		                    <option disabled selected value>Filter</option>
		                    <option value="caffe_ajax">Caffeteria</option>
		                    <option value="food_ajax">Food</option>
		                    <option value="drinks_ajax">Drinks</option>
		            </select>                   
                </div>
        
            <!-- search  -->
                <form class="search_form" id="search" name="search" role="form" action="">
                   <!--     <label class="sr-only" for="q">Search...</label> -->
                        <input class="form-control" id="txtSearch" name="txtSearch" maxlength="50" placeholder="Search..." type="text"/>                       
                </form>

            <!-- TABLE -->
                <div id="inv_tbl">
                
                    <table class="table table-striped" id="tblSearch">
	                    <thead>
		                    <tr>
			                    <th>Product Name</th>
			                    <th>Unit Price</th>
			                    <th>Retail Price</th>
			                    <th>Supplier Name</th>			
			                    <th>Category</th>
		                    </tr>
	                    </thead>
	
	                    <tbody>
	                        <?php foreach($allInfo as $info): ?>
	                            <tr>
	                                <td> <?= $info['product'] ?> </td>
	                                <td>$ <?= $info["unit_price"] ?> </td>
	                                <td>$ <?= $info["retail_price"] ?> </td>
	                                <td> <?= $info["supplier_name"] ?> </td>
	                                <td> <?= $info["category"] ?> </td>
	                                <td> <input type="checkbox" id="checkbox[]" name="checkbox[]" value="<?= $info['product'] ?>"/> </td>
	                            </tr>
	                        <?php endforeach ?>


	                    </tbody>
                    </table>
              </div>
        </div>
</div>


