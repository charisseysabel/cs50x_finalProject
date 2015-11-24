<!--
    edit_trans_form.php
    Edits the clicked item in the main transaction list
-->

<div class="mid">
    <h1>Edit transaction</h1>

    <form action="edit_trans.php" method="post">
	    <fieldset>
	        <?php foreach($allTrans as $info):?>
            <div class="form-group">
		        <select class="form-control" name="main_cat">
		            <option disabled selected value>Transaction type</option>
		            <option value="Income">Income</option>
		            <option value="Expense">Expense</option>
		        </select>
		    </div>	    
	    
		    <div class="form-group">
			    <input autofocus class="form-control" name="trans_name" value="<?= $info['trans_name']?>" type="text"/>
		    </div>
		    
		    <div class="form-group">
			    <input class="form-control" name="amt" value="<?= $info['trans_amount']?>" type="text"/>
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
		        <input type="hidden" name="trans_to_edit" value="<?= $info['trans_name']?>"/>
		        <input type="submit" name="edit_trans" value="Edit" />
                <a href="javascript:history.go(-1);" class="cancel">Cancel</a>
		    </div>
		    <?php endforeach ?>
	    </fieldset>
    </form>

</div>

