<!--
    trans_form.php
    renders a new transaction form
-->

<div class="mid">
    <h1>Add Income</h1>

    <form action="add_income.php" method="post">
	    <fieldset>	    
		    <div class="form-group">
			    <input autofocus class="form-control" name="trans_name" placeholder="Transaction name" type="text"/>
		    </div>
		    
		    <div class="form-group">
			    <input class="form-control" name="amt" placeholder="Amount" type="text"/>
		    </div>
		    		    
		    <!-- income sub category -->
		    <div class="form-group" id="inc_subcat">
		        <select class="form-control" name="inc_sub_cat">
		            <option disabled selected value>Sub-category</option>
		            <option value="Business">Daily business income</option>
		            <option value="Bonus">Bonus</option>
		            <option value="Others">Others</option>
		            <option value="Salary">Salary</option>
		            <option value="Savings">Savings deposit</option>
		            <option value="Tax">Tax refund</option>
		        </select>
		    </div>
		    
		    <div class="form-group">
			    <button type="submit" class="btn btn-default">Add</button>
		    </div>
	    </fieldset>
    </form>

</div>

