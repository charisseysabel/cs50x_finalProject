/**
 *  scripts.js
 *  scripts used for balance web app.
 *
 */
 
 
 
/**
 *  dashboard
 */
 
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

function date() {
    var curr_date = new Date();
    document.getElementById("date").innerHTML = curr_date.toDateString();
}



/**
 *  inventory 
 */

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


 

































