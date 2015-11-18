/**
 *  scripts.js
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
 
// configure typeahead
    // https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md
    $("#q").typeahead({
        autoselect: true,
        highlight: true,
        minLength: 1
    },
    {
        source: search,
        templates: {
            empty: "no places found yet",
            suggestion: _.template("<p><%- <%- product%> </p>")
        }
    });
    
/**
 * Searches database for typeahead's suggestions.
 */
function search(query, cb)
{
    // get places matching query (asynchronously)
    var parameters = {
        geo: query
    };
    $.getJSON("search.php", parameters)
    .done(function(data, textStatus, jqXHR) {

        // call typeahead's callback with search results (i.e., places)
        cb(data);
    })
    .fail(function(jqXHR, textStatus, errorThrown) {

        // log error to browser's console
        console.log(errorThrown.toString());
    });
}
