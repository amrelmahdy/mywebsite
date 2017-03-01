$(document).ready(function(){
	$('.success-msg, .error-msg').delay(3000).fadeOut(1000);


	$('.label-no-height').on('click', function(){
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth(); 
		var yyyy = today.getFullYear();
		if(dd<10) 
		{
		    dd='0'+dd;
		} 

		if(mm<10) 
		{
		    mm='0'+mm;
		}

		today = yyyy + '-' + mm + '-' + dd;

		if(this.checked != true){ 
			$('.end-date').val(null).parent().parent().fadeIn(500);
			console.log(today);
		    
	    } else {
	    	$('.end-date').val(today).parent().parent().fadeOut(100);
	    }
	});
});