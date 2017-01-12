$(document).ready(function(){
			$('#speak').keyup(function(){
				var theText = $(this).val();
   			$('#printOut').text(theText);	
                var theTextLength =$(this).val().length;
            $('#feedback').text('目前字數：'+theTextLength);    

			});
		});
