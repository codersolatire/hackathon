function ajax(sourceid, destinationfile, targetdiv)
{
	$(document).ready(function(){
	  $(sourceid).click(function(){
	    $.ajax({url: destinationfile, success: function(result){
	      $(targetdiv).html(result);
	    }});
	  });
	});
}

function ajaxonload(destinationfile, targetdiv)
{
	$(document).ready(function()
	{
		$.ajax({ url: destinationfile, context: document.body, success: function(){
           $(targetdiv).html(result);
        }});
	});
}