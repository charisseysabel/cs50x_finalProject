<!--
    edit_inv_form.php
    Edits a clicked item in the main inventory list
-->

<div class="mid">
    <h1>Edit entry</h1>
    <p><i>All fields required</i></p>

    <form action="edit_inv.php" method="post">
	    <fieldset>
	        <?php foreach($allProduct as $info): ?>
		    <div class="form-group">
			    <input autofocus class="form-control" name="productName" value="<?= $info['product']?>" type="text"/>
		    </div>
		    <div class="form-group">
			    <input class="form-control" name="unitPrice" value="<?= $info['unit_price']?>" type="text"/>
		    </div>
		    <div class="form-group">
			    <input class="form-control" name="retailPrice" value="<?= $info['retail_price']?>" type="text"/>
		    </div>
		    <div class="form-group">
		        <select class="form-control" name="category"">
		            <option disabled selected value>Sort by Category</option>
		            <option value="Caffeteria">Caffeteria</option>
		            <option value="Food">Food</option>
		            <option value="Drinks">Drinks</option>
		        </select>
		    </div>
				
		    <div class="form-group">
			    <input class="form-control" name="supName" value="<?= $info['supplier_name']?>" type="text"/>
		    </div>

            <div class="form-group">
                <input type="hidden" name="edit_inv_item" value="<?= $info['product']?>" />
                <input type="submit" name="edit" value="Edit"/>
                <button><a href="javascript:history.go(-1);">Cancel</a></button>
            </div>
		    <?php endforeach ?>
	    </fieldset>
    </form>

</div>


