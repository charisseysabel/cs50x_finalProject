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
			        <th>Total Income</th>
			        <th>Total Expenses</th>
			        <th>Ending Cash on Hand</th>
		        </tr>
	        </thead>
	
	         <tbody>
	                         
	            <tr>
	                 <?php foreach($cash as $data): ?>
	                    <td>$ <?= $data["cash_on_hand"] ?></td>
	                 <?php endforeach ?>
	                                
	                 <?php foreach($stats as $info): ?>    
	                     <td>$ <?= $info["SUM(trans_amount)"]?></td>
	                 <?php endforeach ?>
	                            
	                     <td>$ profit</td>
	            </tr>
	                           
	        </tbody>
        </table>
    
    <!-- MONTH DETAILS -->   
    <h3>Monthly Details</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Income</th>
                    <th>Expense</th>
                    <th>Profit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>November</td>
                    <td>income for november</td>
                    <td>expenses for november</td>
                    <td>profit at the end of the month</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Average</td>
                    <td>average income</td>
                    <td>average expense</td>
                    <td>average profit</td>
                </tr>
            </tfoot>
        </table>
    
</div>


<!--
    generate charts
-->
<script>

    // bar chart
    var data = {
		labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ],
		datasets: [
			{
				label: "cash_in",
				fillColor: "rgba(49, 189, 193, 1)",
				highlightFill: "rgba(59, 227, 232, 1)",
				data: [287.30 , 319, 220, 239, 237, 272.20]
			},
			{
				label: "cash_out",
				fillColor: "rgba(245, 134, 37, 1)",
				highlightFill: "rgba(255, 146, 39, 1)",
				data: [169.70, 134.70, 111, 113.60, 75.60, 94.30]
			}
			
		]
	}
	
	var barOptions = {
		animateScale:false,
	}
	
	var ctx = document.getElementById("myChart").getContext("2d");
	new Chart(ctx).Bar(data);
</script>

