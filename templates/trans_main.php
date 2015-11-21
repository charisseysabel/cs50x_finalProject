<!--
    trans_main.php
    main content for the transactions tab (HTML)
-->
<div class="mid">   
    <h1>Transactions</h1>
    
    <div class="content">
    	<!-- ajax generated tabs -->
    	<div class="ajax_btn">
    	    <button onclick="setIncome(this.value);" class="btn btn-default" name="income_cat" id="income_cat" value="income_ajax">Income</button>
    	    <button onclick="setIncome(this.value);" class="btn btn-default" name="expense_cat" id="expense_cat" value="expense_ajax">Expense</button>
    	</div>
        	<!-- forms -->
        	<div class="trans_btn">
        		<a href="add_trans.php" type="button">Add</a>
        		<a href="#"  type="button">Edit</a>    		
        		<a href="#" type="button">Delete</a>
        	</div>

    	
    	             
        <canvas id="expenses"></canvas>
		<div id="js-legend">
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
		                <td><span id="trans_name"> <?= $data["trans_name"]?> </span> <br>
		                    <span id="trans_date"> <?= $data["trans_time"]?> </span>
		                </td>
		                
		                <td> <?= $data["trans_sub_cat"] ?> <br>
		                    <span id="trans_cat"><?= $data["trans_category"] ?></span>
		                </td>
		                <td>$ <?= $data["trans_amount"] ?> </td>
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
// pie chart
	var data1 = [
        {
            value: 300,
            color: "#F7464A",
            highlight: "#ff5a5e",
            label: "Red"
        },
        {
            value: 50,
            color: "#46bfbd",
            highlight: "#5ad3d1",
            label: "Green"
        },
        {
            value: 100,
            color: "#fdb45c",
            highlight: "#ffc870",
            label: "Yellow"
        }
    
    ];

    var pieOptions = {
        tooltipTemplate: "<%= value %>%"      
    }
    
    
    var ctx1 = document.getElementById("expenses").getContext("2d");
    var myPie = new Chart(ctx1).Doughnut(data1, pieOptions);

    document.getElementById("js-legend").innerHTML = myPie.generateLegend();
</script>
