/**
 *	cash_chart.js
 *	renders the chart on the cashflow tab
 */

function init() {
	var data = {
		labels: ["Jan", "Feb", "Mar" ],
		datasets: [
			{
				label: "First dataset",
				fillColor: "rgba(220, 200, 200, 0.5)",
				strokeColor: "rgba(220, 220, 220, 0.8)",
				highlightFill: "rgba(220, 220, 220, 0.75)",
				highlightStroke: "rgba(220, 220, 200, 1)", 
				data: [65, 59, 80, 56, 55, 40]
			},
			{
				label: "First dataset",
				fillColor: "rgba(220, 200, 200, 0.5)",
				strokeColor: "rgba(220, 220, 220, 0.8)",
				highlightFill: "rgba(220, 220, 220, 0.75)",
				highlightStroke: "rgba(220, 220, 200, 1)", 
				data: [65, 59, 80, 56, 55, 40]
			}
			
		]
	}
	
	var barOptions = {
		animateScate:true
	}
	
	var ctx = document.getElementById("myChart").getContext("2d");
	new Chart(ctx).Bar(data);
}

window.onload = init;


