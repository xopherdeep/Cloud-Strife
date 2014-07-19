{foreach $oBlox as $b => $o}
	{assign var=go value={$o.blox|substr:1|strtolower|replace:'-':'/'}}

	{if $masterKey.is.admin}
		<div id="o-blox-{$o.blox}-{$o.id}" icon="{$o.icon}" blox="{$o.blox}" bloxid="{$o.id}" class="blox-panel" style="display: none;" >
			<i class="fa fa-5x fa-spinner fa-spin"></i>
		</div> 
	{else}
		{* include some javascript in your template *} 
		{fetch file="http://$HTTP_HOST/html/{$o.blox|substr:1|strtolower|replace:'-':'/'}/{$o.id}"} 
	{/if}
	
	<script type="text/javascript">
		$(document).ready(function() {
			// $('#o-blox-{$o.blox}-{$o.id}').load('/html/{$o.blox|substr:1|strtolower|replace:'-':'/'}', function  () {
			// });
			//fadeInElements($('.blox-panel'), executeAfterFade);
		});
	</script>
{/foreach}
	{if $masterKey.is.admin}
	<script type="text/javascript">
		function executeAfterFade() {
		    //alert('Done!'); 
			setTimeout(function(){
				$('.godbar').css({
			    	top: 0
			    });
			},777); 
		}

		function fadeInElements(elementSelectors, lastFunction) {
		    $(elementSelectors[0]).hide().load('/html/'+$(elementSelectors[0]).attr('blox').slice(1).toLowerCase().replace('-','/')+'/'+$(elementSelectors[0]).attr('bloxid'),function (){
		    	$( ".inner" ).after( "<p>Test</p>" );
		        $(elementSelectors[0]).show(function  () {
		        	elementSelectors[1] ? 
		        	fadeInElements(elementSelectors.splice(1, elementSelectors.length - 1), lastFunction) : lastFunction(); 
		        }); 
		    });
		}

		$(document).ready(function() { 

			{if 0 == $oBlox|count}
				$('.godbar').css({
			    	top: 0
			    });
			{else}

			 fadeInElements($('.blox-panel'), executeAfterFade);	  
			{/if}

		});

	</script>
	{/if}