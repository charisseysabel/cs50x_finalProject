<!--
    del_inv_form.php
    HTML confirmation to delete data
-->

<div class="mid">
    <h1>Confirm delete?</h1>
    <p><i>Warning: This cannot be undone!</i></p>
   
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
	                        <?php foreach($delInfo as $info): ?>
	                            <tr>
	                                <td> <?= $info['product'] ?> </td>
	                                <td> <?= $info["supplier_name"] ?> </td>
	                                <td> <?= $info["category"] ?> </td>
	                                <td>$ <?= $info["unit_price"] ?> </td>
	                                <td>$ <?= $info["retail_price"] ?> </td>
	                                <td>$ <?= number_format(($info["unit_price"] - $info["retail_price"]), 2) ?></td>
	                            </tr>
	                        <?php endforeach ?>
	                    </tbody>
                    </table>
              </div>
        
        <form action="del_inv.php" method="post">
            <input type="hidden" name="delete_rec_id" value="<?= $info['product']?>" />
            <input type="submit" name="delete" value="Delete!"/>
            <button><a href="javascript:history.go(-1);">Cancel</a></button>
        </form>
              
    
</div>



