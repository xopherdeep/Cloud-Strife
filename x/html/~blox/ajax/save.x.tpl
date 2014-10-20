<script type="text/javascript"> 
	window.x = {
		requestSent : false,
		save        : function(f,e,call,b4) { 
			e.preventDefault(); 
			var data = $(f).serializeObject(); 
			 act = $(f).attr('action');


			if(!window.x.requestSent){
				window.x.requestSent = true; 

				if(typeof(b4) == 'function')
					b4(f,e);

				$.ajax({ 
					url      : (act) ?  act : location.pathname+'/.json',
					dataType : 'json',
					type     : 'POST',
					data     : data,
					success : function(data){
						window.x.requestSent = false 
						Messenger().post((data.error) ? {
							showCloseButton : true,
							type            : 'danger',
							message         : '<i class="fa fa-ban"></i> '+data.error
						} : {
							showCloseButton : true,
							type            : 'success',
							message         : '<i class="fa fa-check"></i> '+ (typeof(data.msg) != 'undefined') ? data.msg : 'Saved'
						});
						if(typeof(call) == 'function')
							call(f,e);
		        	}
		        });
			} 
		}
	};
</script>