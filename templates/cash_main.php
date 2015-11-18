<!--
    cash_main.php
    main content for the cashflow tab (HTML)
-->


<!-- Create the chart here -->

<div class="mid">
    <h1>Cashflow</h1>

    <div class="content">
        <canvas id="myChart"> </canvas>
        
        <canvas id="expenses"></canvas>
        <div id="js-legend">
        
        </div>
    </div>
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
		animateScate:true
	}
	
	var ctx = document.getElementById("myChart").getContext("2d");
	new Chart(ctx).Bar(data);
	
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
























