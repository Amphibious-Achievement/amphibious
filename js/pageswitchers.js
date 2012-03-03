/**
 * @author Turner Bohlen
 * 
 * Javscript to link between pages and 
 */

$(document).ready(function() {
	// preparing highlighting for the navbuttons
	$(".navbutton").hover(function () {
		$(this).addClass("activenavbutton");
	}, function () {
		$(this).removeClass("activenavbutton");
	});

// preparing highlighting for the newslinks
	$(".newslink").hover(function () {
		$(this).addClass("activenewslink");
	}, function () {
		$(this).removeClass("activenewslink");
	});
});

function collectionToArray(collection)  
{  
    var ary = [];  
    for(var i=0, len = collection.length; i < len; i++)  
    {  
        ary.push(collection[i]);  
    }  
    return ary;  
}

// redirect for divs
function linkTo(url) {
	window.location.href = url;
}