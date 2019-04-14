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

function AjaxForm(destinationfile,form_data)
{
	$.ajax({
      url: destinationfile,
      type: "POST",
      data: form_data,
      success: function(resp) {
        return resp
      }      
    });
}