<!--
    income_main.php
    main content for income tab
-->
<div class="mid">   
    <h1>Income</h1>
    
    <div class="content">
	<!--	<div class="inv_btn">
        	<a href="add_income.php" type="button">Add Income</a>
            <a href="add_expense.php">Add Expense</a>                  
        </div>
   -->
       
        <!-- canvas for charts -->
    	<div id="canvas_div">             
		    <canvas id="income"></canvas>
		</div>
		
		<div id="trans_tbl">
			<table id="income_table_id" class="table table-striped" cellspacing="0" width="100%">
            	<thead>
	                <tr>
						<th>Transaction</th>
                        <th>Sub-category</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                <thead>
                <tfoot>
                    <tr>
                        <th>Transaction</th>
                        <th>Sub category</th>
                        <th>Amount</th>
                        <th>Date</th>
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
    $.getJSON("inc_json_chart.php", function(data) {
        var inc_Rlabel = [], inc_Rvalue = [];
        for(i = 0; i < data.length; i++) {
            inc_Rlabel.push(data[i].trans_sub_cat);
            inc_Rvalue.push(Number(data[i].trans_amount));
        }

        var income_data = {
            labels: inc_Rlabel,
            datasets: [
                {
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: inc_Rvalue
                }
            ]
        };

        var rOptions = {};

        var ctx_inc = document.getElementById('income').getContext("2d");
        var incRadar = new Chart(ctx_inc).Radar(income_data);

    });

</script>