/**
 *  scripts.js
 *  scripts used for balance web app.
 *
 */

 
 
/**
 *  dashboard
 */
 
// set time
function time() {
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
}

// set date
function date() {
    var curr_date = new Date();
    document.getElementById("date").innerHTML = curr_date.toDateString();
}



/**
 *  inventory 
 */


// filter using ajax
function setFilter(name)
{
    if(name == "")
        return;
	
	// create new ajax obj
	var ajax = new XMLHttpRequest();
	
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			document.getElementById('inv_tbl').innerHTML = ajax.responseText;
		}
		else {
			document.getElementById('inv_tbl').innerHTML = "<p>Loading...</p>";
		}
	};
	
	// open requested file
	ajax.open('GET', name + '.php', true);
	ajax.send();
}


/**
 *  initialize data tables
 */

 


/**
 *  transactions
 */
 
// generate pie chart
function search(query, cb) {
    var parameters = { key: value };
    
    $.getJSON("json.php", parameters).done(function(data, textStatus, jqXHR) {
        cb(data);
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(errorThrown.toString() );
    });
}


 

// income filter using ajax
function setIncome(name)
{
    if(name == "")
        return;
        
    // create new ajax obj
    var inc_Ajax = new XMLHttpRequest();
    
    inc_Ajax.onreadystatechange = function() {
        if(inc_Ajax.readyState == 4 && inc_Ajax.status == 200) {
            document.getElementById('trans_tbl').innerHTML = inc_Ajax.responseText;
        }
        else {
            document.getElementById('trans_tbl').innerHTML = "<p>Loading...</p>";
        }
    };
    
    // open requested file
    inc_Ajax.open('GET', name + '.php', true);
    inc_Ajax.send();
}


































