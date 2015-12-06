<!--
    cash_main.php
    main content for the cashflow tab (HTML)
-->

<div class="mid">
    <h1>Cashflow</h1>
    <p></p>

    <div class="content">
        <canvas id="myChart"> </canvas>      
    </div>
    
    <!-- TABLE SUMMARY-->        
        <table class="table table-striped" id="tblSearch">
	        <thead>
		        <tr>
			        <th>Beginning Cash on Hand</th>
			        <th class="cash_inc">Total Income</th>
			        <th class="cash_exp">Total Expenses</th>
			        <th>Ending Cash on Hand</th>
		        </tr>
	        </thead>
	
	         <tbody>
	                         
	            <tr>
	                 <?php foreach($cash as $data): ?>
	                    <td> <?= $data["cash_on_hand"] ?></td>
	                 <?php endforeach ?>
	                    <td class="item_inc"><?= htmlspecialchars($totInc)?></td>
	                    <td class="item_inc"><?= htmlspecialchars($totExp)?></td>
	                    <td><?= htmlspecialchars($profit)?></td>
	            </tr>
	                           
	        </tbody>
        </table>
    
    <!-- MONTH DETAILS -->   
    <h3>Monthly Details</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Month</th>
                    <th class="cash_inc">Income</th>
                    <th class="cash_exp">Expense</th>
                    <th>Profit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allMonths as $item): ?>
                <tr>
                    <td><?= $item[0]	?></td>
                    <td class="item_inc"><?= $item[1]	?></td>
                    <td class="item_exp"><?= $item[2]	?></td>
                    <td><?= $item[3] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    
</div>


<!--
    generate charts
-->
<script>

    // bar chart
    $.getJSON("cash_chart_json.php", function(result) {
    var expenses = [], income = [];
    for(i = 0; i < result.length;  i++)
    {
        if(i < 12)
        {
            expenses.push(result[i]);
        }
        else
        {
            income.push(result[i]);
        }
    }

    var data = {
		labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
		datasets: [
			{
				label: "cash_in",
				fillColor: "rgba(49, 189, 193, 1)",
				highlightFill: "rgba(59, 227, 232, 1)",
				data: income
			},
			{
				label: "cash_out",
				fillColor: "rgba(245, 134, 37, 1)",
				highlightFill: "rgba(255, 146, 39, 1)",
				data: expenses
			}
			
		]
	}
	
	var barOptions = {
		animateScale:false,
	}
	
	var ctx = document.getElementById("myChart").getContext("2d");
	new Chart(ctx).Bar(data);
	
	});
</script>

