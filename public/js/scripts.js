/**
 *  scripts.js
 *  scripts used for balance web app.
 *
 */

$(document).ready(function() {

/**
 *  datatables
 */

    // create inventory datatable
    var inv_table = $('#inv_table_id').DataTable( {
        "sAjaxSource" : "inv_ajax.php",
        "select" :  true,
        "sAjaxDataProp": "",
        "dom" : 'Bfrtip',
        "buttons" : [
            {
                text: 'Add', // add item button link
                action: function(e, dt, node, config) {
                    window.location.href='add_form.php';
                }
            },
            {
                text: 'Edit', // edit item button
                action: function(e, dt, node, config) {
                    alert("Edit button activated");
                }
            },
            'copy', 'excel', 'pdf'
        ],
        "aoColumns": [
            {"mData": "product"},
            {"mData": "supplier_name"},
            {"mData": "category"},
            {"mData": "unit_price"},
            {"mData": "retail_price"}
        ]
    });
    
    // add buttons to inventory table (because of Bootstrap integration)
    inv_table.buttons().container()
        .appendTo($('.col-sm-6:eq(0)', inv_table.table().container() ));
    
    // create income datatable
    var inc_table = $('#income_table_id').DataTable( {
        "sAjaxSource" : "income_json.php",
        "select" : true,
        "sAjaxDataProp" : "",
        "dom" : 'Bfrtip',
        "buttons" : [
            {
                text: 'Add', // add item button link
                action: function(e, dt, node, config) {
                    window.location.href='add_income.php';
                }
            },
            {
                text: 'Edit', // edit item button
                action: function(e, dt, node, config) {
                    alert("Edit button activated");
                }
            },
            'copy', 'excel', 'pdf'
        ],
        "aoColumns" : [
            {"mData" : "trans_name"},
            {"mData" : "trans_sub_cat"},
            {"mData" : "trans_amount"},
            {"mData" : "trans_time"}
        ]
    });
    
    // add buttons to income table (because of Bootstrap integration)
    inc_table.buttons().container()
        .appendTo($('.col-sm-6:eq(0)', inc_table.table().container() ));
        
    
    // create expense datatable
    var exp_table = $('#exp_table_id').DataTable( {
        "sAjaxSource" : "expenses_json.php",
        "select" : true,
        "sAjaxDataProp" : "",
        "dom" : 'Bfrtip',
        "buttons" : [
            {
                text: 'Add', // add item button link
                action: function(e, dt, node, config) {
                    window.location.href='add_expense.php';
                }
            },
            {
                text: 'Edit', // edit item button
                action: function(e, dt, node, config) {
                    alert("Edit button activated");
                }
            },
            'copy', 'excel', 'pdf'
        ],
        "aoColumns" : [
            {"mData" : "trans_time"},        
            {"mData" : "trans_name"},
            {"mData" : "trans_sub_cat"},
            {"mData" : "trans_amount"},
        ]
    });
    
    // add buttons to expenses table (because of Bootstrap integration)
    exp_table.buttons().container()
        .appendTo($('.col-sm-6:eq(0)', exp_table.table().container() ));    

    
    
     
/**
 *  dashboard tab:
 */ 
     
    // SET THE TIME ON THE DASHBOARD
        var curr_time = new Date();
        
        var hour = curr_time.getHours();
        var minutes = curr_time.getMinutes();
        var secs = curr_time.getSeconds();
        
        // pad minutes and seconds with leading zeros, if required
        minutes = (minutes < 10 ? "0" : "") + minutes;
        secs = (secs < 10 ? "0" : "") + secs;
        
        // AM or PM
        var timeOfDay = (hour < 12) ? "AM" : "PM";
        
        // Convert ro 12-hour format
        hour = (hour > 12) ? hour - 12: hour;
        
        // convert an hours component of '0' to '12'
        hour = (hour == 0) ? 12 : hour;
        
        // make string
        var timeString = hour + ":" + minutes + " " + timeOfDay;
        
        // update time display
        document.getElementById("clock").firstChild.nodeValue = timeString;

    // SET THE DATE
        var curr_date = new Date();
        document.getElementById("date").innerHTML = curr_date.toDateString();    

 
/**
 *  transactions tab
  
    $.getJSON("expenses_json.php", function (data) {
    var exp_Rlabel = [], exp_Rvalue = [];
    for(i = 0; i < data.length; i++) {
    
        exp_Rlabel.push(data[i].trans_sub_cat);
        exp_Rvalue.push(data[i].trans_amount);
    }
    
    var expense_data = [];
    for(i = 0; i < exp_Rlabel.length; i++)
    {
        expense_data.push({ labels: [ exp_Rlabel[i] ] ,
            datasets: [
                label: "Expenses dataset",
                fillColor: "rgba(220, 220, 220, 0.2)",
                strokeColor: "rgba(220, 220, 220, 1)",
                pointColor: "rgba(220, 220, 220, 1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220, 220, 220, 1)",
                data: [ exp_Rvalue[i] ]
            ]
        });
//        value: exp_Rvalue[i], color: c, highlight: h, label: exp_Rlabel[i] });
    }
    
     var exp_Roptions = { };
       
    var ctx_exp = document.getElementById("expenses").getContext("2d");
    var expRadar = new Chart(ctx_exp).Radar(expense_data, exp_Roptions);
    
    //generate legend
    //document.getElementById("js-legend").innerHTML = myPie.generateLegend();
    
});    
*/
    
}); // collapse document.ready function


