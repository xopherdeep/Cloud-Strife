{foreach $input as $name => $i}
	{include file="~blox/ajax/input.x.tpl"}
{/foreach}
<script type="text/javascript">
	$(".popover-test").popover();
	window.config = {
		requestSent : false,
		save : function(input,put) {
			var i = $(input);
			var icon = $('#i-'+i.attr('id'));	
			var btn = $('#btn-'+i.attr('id'));	
			var c = icon.attr('class');
 

			if(!window.config.requestSent){
				window.config.requestSent = true;
				btn.toggleClass('btn-info');
				btn.toggleClass('btn-success');

				icon.toggleClass(c);
				icon.toggleClass('fa fa-spinner fa-spin');
				 
				$.ajax({ 
					url      : '/{$Xtra}/{$method}/.json',
					dataType : 'json',
					type     : 'POST',
					data     : {
						input : put
					},
					success : function(data){
						window.config.requestSent = false
						icon.attr('class',c);
						btn.toggleClass('btn-success');
						btn.toggleClass('btn-info');
						
						var msg = (typeof(data.msg)) ? data.msg : 'else';	

						m = (data.error) ? {
							showCloseButton : true,
							type            : 'danger',
							message         : '<i class="fa fa-ban"></i> '+data.error
						} : {
							showCloseButton : true,
							type            : 'success',
							message         : '<i class="fa fa-check"></i> '+(data.msg)
						};

						Messenger().post(m);
		        	}
		        });
			} 
		}
	};
</script>