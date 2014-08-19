
{foreach $input as $name => $i}
	{include file="~blox/ajax/input.x.tpl"}
{/foreach}
<script type="text/javascript">
	
	$(".popover-test").popover();
	window.config = {
		requestSent : false,
		save : function(input,config) {
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
					url : '/{$toBackDoor}/{$Xtra}/{$method}/.json',
					dataType : 'json',
					type : 'POST',
					data : {
						config : config
					},
					success : function(data){
						window.config.requestSent = false
						icon.attr('class',c);
						btn.toggleClass('btn-success');
						btn.toggleClass('btn-info');

		        	}
		        });
			} 
		}
	};
</script>