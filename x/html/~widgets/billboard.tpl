<div class="row">
	<div class="col-md-12"> 
		<section class="widget">
			<div class="jumbotron">
				<div class="container">
			        <h1>
			        	{assign var=XTRA value="X{$Xtra|strtoupper}"}
			        	
			        	{if $method == 'index'}
			        		<i class="fa {$LANG.$XTRA.ICON} fa-2x pull-right fa-border"></i> 
			        		{$LANG.$XTRA.JUMBO.HEAD}
			        	{else}
			        		<i class="fa {$LANG.$XTRA.$method.ICON} fa-2x pull-right fa-border"></i> 
			        		{$LANG.$XTRA.$method.JUMBO.HEAD}
			        	{/if} 
			        </h1>
			        <p class="lead"> 
			            <p>  
			                <blockquote>
			                    {if $method == 'index'}
					        		{$LANG.$XTRA.JUMBO.QUOTE}
					        	{else}
					        		{$LANG.$XTRA.$method.JUMBO.QUOTE}
					        	{/if} 
			                </blockquote>
			            </p> 
			        <p>
			        {foreach $LANG.$XTRA.JUMBO.BTN as $b => $btn}
			            <a class="btn btn-lg {$btn.class} {if $method == $b}active{/if}"   href="/{$toBackDoor}/{$Xtra}/{$b}">
			                {$btn.a}
			            </a>
			        {/foreach}
			        </p>
			    </div>
			</div>
		</section>
	</div>  
	{if !$col}
		{$col = 6}
	{/if}

	{foreach $qBlox as $q => $blox}

		{if $q == "x{$Xtra|ucfirst}"}
			{foreach $blox as $b => $x}
				{if $x.backdoor}
					{if $method != 'index' && $x.filter == $method}
						{include file="~widgets/col.tpl"   method="$b" title=$x.blox}
					{elseif $method == 'index'}
						{include file="~widgets/col.tpl"  method="$b" title=$x.blox}
					{/if}
				{/if}
			{/foreach}
		{/if}

	{/foreach}
</div>

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>