<!--
    new_item.php
    form for adding a new item into inventory
-->

<h1>Add new item</h1>
<p><i>All fields required</i></p>


<form action="add_form.php" method="post">
	<fieldset>
		<div class="form-group">
			<input autofocus class="form-control" name="productName" placeholder="Product name" type="text"/>
		</div>
		<div class="form-group">
			<input class="form-control" name="unitPrice" placeholder="Unit price" type="text"/>
		</div>
		<div class="form-group">
			<input class="form-control" name="retailPrice" placeholder="Retail price" type="text"/>
		</div>
		<div class="form-group">
		    <select class="form-control" name="category">
		        <option disabled selected value>Category</option>
		        <option value="caffeteria">Caffeteria</option>
		        <option value="food">Food</option>
		        <option value="drinks">Drinks</option>
		    </select>
		</div>
		
		
		<div class="form-group">
			<input class="form-control" name="supName" placeholder="Supplier's name" type="text"/>
		</div>
		<div class="form-group">
			<input class="form-control" name="supNumber" placeholder="Supplier's number" type="text"/>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-default">Add</button>
		</div>
	</fieldset>
</form>



