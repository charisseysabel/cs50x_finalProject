<!--
    trans_main.php
    main content for the transactions tab (HTML)
-->
<div class="mid">   
    <h1>Transactions</h1>
    
    <div class="content">
                <div class="inv_btn">
                    <a href="add_income.php" type="button">Add Income</a>
                    <a href="add_expense.php">Add Expense</a>
                    
                    <select name="filter" id="filter" onchange="setIncome(this.value);">
		                    <option disabled selected value>Filter</option>
		                    <option value="income_ajax">Income</option>
		                    <option value="expense_ajax">Expense</option>
		            </select>
		            
		            <form method="post" id="search_form" action="" >
		                <input type="text" name="name" placeholder="Search transactions" id="searchbox"/>
		                <input type="submit" name="submit" value="Search" id="search_btn"/>
		            </form>                   
                
                </div>

    	<div id="canvas_div">             
            <canvas id="expenses"></canvas>
		    <canvas id="income"></canvas>
		</div>
		
		<div id="trans_tbl">
			<table class="table table-striped">
				<thead>
					<tr>
					    <th>Transaction</th>
						<th>Category</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
				    
				<?php foreach($trans_all as $data): ?>
		            <tr>
		                <td><span class="trans_name"> <?= $data["trans_name"]?> </span> <br>
		                    <span class="trans_date"> <?= $data["trans_time"]?> </span>
		                </td>
		                
		                <td> <?= $data["trans_sub_cat"] ?> <br>
		                    <span id="trans_cat"><?= $data["trans_category"] ?></span>
		                </td>
		                <td>$ <?= $data["trans_amount"] ?> </td>
		                <td> <span class="td_link"><a href="edit_trans.php?trans_name=<?=$data['trans_name']?>">Edit</a></span> <br>
		                     <span class="td_link"><a href="del_trans.php?trans_name=<?=$data['trans_name']?>">Delete</a></span>
		                </td>
		            </tr>		        
		        <?php endforeach ?>
			</table>
		</div>
                
    </div>
</div>



<!--
    generate chart
-->

<script>
// get expenses category JSON data from transactions database
$(document).ready(function() {
  $.getJSON("expenses_json.php", function (data) {
    var exp_pieLabel = [], exp_pieValue = [];
    for(i = 0; i < data.length; i++) {
    
        exp_pieLabel.push(data[i].trans_sub_cat);
        exp_pieValue.push(data[i].trans_amount);
    }
    
    var expense_data = [];
    for(i = 0; i < exp_pieLabel.length; i++)
    {
        // randomize colors
        r = Math.floor(Math.random() * 250);
        g = Math.floor(Math.random() * 300);
        b = Math.floor(Math.random() * 250);
        c = 'rgb(' + r + ',' + g + ',' + b + ')';
        h = 'rgb(' + (r+20) + ',' + (g+20) + ',' + (b+20) + ')';
    
        expense_data.push({ value: exp_pieValue[i], color: c, highlight: h, label: exp_pieLabel[i] });
    }
    
     var exp_pieOptions = { };
       
    var ctx_exp = document.getElementById("expenses").getContext("2d");
    var expPie = new Chart(ctx_exp).Doughnut(expense_data, exp_pieOptions);
    
    //generate legend
    //document.getElementById("js-legend").innerHTML = myPie.generateLegend();
});    
  
  // get income JSON
  $.getJSON("income_json.php", function (data) {
    var inc_pieLabel = [], inc_pieValue = [];
    for(i = 0; i < data.length; i++) {
    
        inc_pieLabel.push(data[i].trans_sub_cat);
        inc_pieValue.push(data[i].trans_amount);
    }
    
    var income_data = [];
    for(i = 0; i < inc_pieLabel.length; i++)
    {
        // randomize colors
        r = Math.floor(Math.random() * 250);
        g = Math.floor(Math.random() * 300);
        b = Math.floor(Math.random() * 250);
        c = 'rgb(' + r + ',' + g + ',' + b + ')';
        h = 'rgb(' + (r+20) + ',' + (g+20) + ',' + (b+20) + ')';
    
        income_data.push({ value: inc_pieValue[i], color: c, highlight: h, label: inc_pieLabel[i] });
    }
    
     var pieOptions = { };
       
    var ctx_inc = document.getElementById("income").getContext("2d");
    var incPie = new Chart(ctx_inc).Doughnut(income_data, pieOptions);
  
});

});     
</script>
