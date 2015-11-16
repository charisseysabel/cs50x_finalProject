<!--
    inv_main.php
    main content for the inventory tab (HTML)
-->

<h1>Inventory</h1>

<!-- search  -->
    <form class="search_form" id="form" role="form">

            <label class="sr-only" for="q">Search...</label>
            <input class="form-control" id="q" placeholder="Search..." type="text"/>

    </form>

<!-- table buttons -->

    <div class="tbl_btn">
        <a href="add_form.php" class="btn btn-default" type="button">Add</a>
        <a href="del_form.php" class="btn btn-default">Remove</a>
    </div>
        

<!-- TABLE -->

    <table class="table table-striped">
	    <thead>
		    <tr>
			    <th>Product Name</th>
			    <th>Unit Price</th>
			    <th>Retail Price</th>
			    <th>Supplier Name</th>			
			    <th>Contact Number</th>
			    <th>Category</th>
		    </tr>
	    </thead>
	
	    <tbody>
	        <?php foreach($allInfo as $info): ?>
	            <tr>
	                <td> <?= $info["product"] ?> </td>
	                <td>$ <?= $info["unit_price"] ?> </td>
	                <td>$ <?= $info["retail_price"] ?> </td>
	                <td> <?= $info["supplier_name"] ?> </td>
	                <td> <?= $info["supplier_contact"] ?> </td>
	                <td> <?= $info["category"] ?> </td>
	            </tr>
	        <?php endforeach ?>


	    </tbody>
    </table>

