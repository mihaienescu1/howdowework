var Application = (function(){
	
	
	var _registerButton = function() {
	
		$('#hdww-register-button').on('click', function(){
			window.location = $(this).attr('url');
		});
	};
	
	
		
	
	return {
		
		initComponents : function()
		{
			_registerButton();
		
		},	
	
	    run : function() {
			
			Application.initComponents();
			
			console.log('Application is up and runnable');
			
		}
	};
		
})();