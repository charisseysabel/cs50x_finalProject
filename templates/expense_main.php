<!--
    expense_main.php
    main content for expense tab
-->
<div class="mid">   
    <h1>Expenses</h1>
    
    <div class="content">
	<!--	<div class="inv_btn">
        	<a href="add_income.php" type="button">Add Income</a>
            <a href="add_expense.php">Add Expense</a>                  
        </div>
   -->
       
        <!-- canvas for charts -->
    	<div id="canvas_div">             
		    <canvas id="expenses"></canvas>
		</div>
		
		<div id="trans_tbl">
			<table id="exp_table_id" class="table table-striped" cellspacing="0" width="100%">
            	<thead>
	                <tr>
                        <th>Date</th>	                
						<th>Transaction</th>
                        <th>Sub-category</th>
                        <th class="cash_exp">Amount</th>
                    </tr>
                <thead>
                <tfoot>
                    <tr>
                        <th>Date</th>	                
						<th>Transaction</th>
                        <th>Sub-category</th>
                        <th class="item_exp">Amount</th>
                   </tr>
               </tfoot>
               <tbody>
               </tbody>
        </table>        
      </div> <!-- collapse trans_tbl -->
                
    </div> <!-- collapse content -->
</div> <!-- collapse mid -->

<script>
// radar chart for expenses tab
    $.getJSON("exp_json_chart.php", function(data) {
        var exp_Rlabel = [], exp_Rvalue = [];
        for(i = 0; i < data.length; i++) {
            exp_Rlabel.push(data[i].trans_sub_cat);
            exp_Rvalue.push(Number(data[i].trans_amount));
        }

        var expense_data = {
            labels: exp_Rlabel,
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: exp_Rvalue
                }
            ]
        };

        var rOptions = {};

        var ctx_exp = document.getElementById('expenses').getContext("2d");
        var expRadar = new Chart(ctx_exp).Radar(expense_data);

    });

</script>












