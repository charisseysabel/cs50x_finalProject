<!--
    trans_form.php
    renders a new transaction form
-->

<div class="mid">
    <h1>Add Expense</h1>

    <form action="add_expense.php" method="post">
	    <fieldset>
		    <div class="form-group">
			    <input autofocus class="form-control" name="trans_name" placeholder="Transaction name" type="text"/>
		    </div>
		    
		    <div class="form-group">
			    <input class="form-control" name="amt" placeholder="Amount" type="text"/>
		    </div>
		    		    
		    <!-- expenses sub category -->		    
		    <div class="form-group" id="exp_subcat">
		        <select class="form-control" name="exp_sub_cat">
		            <option disabled selected value>Sub-category</option>
		            <option value="Auto">Auto</option>
		            <option value="Bank charge">Bank Charge</option>
		            <option value="Cash">Cash</option>
		            <option value="Charity">Charity</option>
		            <option value="Childcare">Childcare</option>
		            <option value="Clothing">Clothing</option>
		            <option value="Credit_card">Credit card payment</option>
		            <option value="Eating_out">Eating out</option>
		            <option value="Education">Education</option>
		            <option value="Entertainment">Entertainment</option>
		            <option value="Gifts">Gifts</option>
		            <option value="Groceries">Groceries</option>
		            <option value="Health & fitness">Health & Fitness</option>
		            <option value="Home">Home repair</option>
		            <option value="Household">Household</option>
		            <option value="Insurance">Insurance</option>
		            <option value="Interest">Interest</option>
		            <option value="Loan">Loan</option>
		            <option value="Medical">Medical</option>
		            <option value="Misc">Misc</option>
		            <option value="Mortgage">Mortgage</option>
		            <option value="Others">Others</option>
		            <option value="Pets">Pets</option>
		            <option value="Rent">Rent</option>
		            <option value="Tax">Tax</option>
		            <option value="Transport">Transport</option>
		            <option value="Travel">Travel</option>
		            <option value="Utilities">Utilities</option>
		        </select>
		    </div>

		    <div class="form-group">
			    <button type="submit" class="btn btn-default">Add</button>
		    </div>
	    </fieldset>
    </form>

</div>

