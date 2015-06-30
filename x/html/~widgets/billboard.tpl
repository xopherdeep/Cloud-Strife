{assign var=XTRA value="X{$Xtra|strtoupper}"}

<div class="row">
	<div class="col-md-2 col-sm-12 col-xs-12"> 
		{include file="~widgets/list-group.tpl" list=$LANG.$XTRA.JUMBO.BTN title=$LANG.$XTRA.JUMBO.HEAD}
	</div>
	
	<div class="col-md-10 col-sm-12 col-xs-12"> 
		<section class="widget">
			<div class="jumbotron">
				<div class="container" style="">
			        <h1>
			        	{if $method == 'index'}
			        		<i class="fa {$LANG.$XTRA.ICON} fa-2x  pull-right"></i>
			        		{$LANG.$XTRA.JUMBO.HEAD}
			        	{else}
			        		<i class="fa {$LANG.$XTRA.$method.ICON} fa-2x pull-right  "></i>
			        		{$LANG.$XTRA.$method.JUMBO.HEAD}
			        	{/if}
			        </h1>
			        <p>
	                    {if $method == 'index'}
			        		{$LANG.$XTRA.JUMBO.QUOTE}
			        	{else}
			        		{$LANG.$XTRA.$method.JUMBO.QUOTE}
			        	{/if} 
	                </p>

	                {if $LANG.$XTRA.$method.JUMBO.BTN}
				        {foreach $LANG.$XTRA.$method.JUMBO.BTN as $b => $btn}
				            {if $btn.modal}
				            	{include "~widgets/btn.modal.tpl" btn=$btn}
				            {else}
				            
				            <a class="btn btn-lg {$btn.class} {if $method == $b}active{/if}"   href="/{$toBackDoor}/{$Xtra}/{$b}">
				                {$btn.a}
				            </a>

				            {/if}
				        {/foreach}
			        {/if}
			        </p>
			    </div>
			</div>
		</section>
	</div>  
</div>	   
<div class="row">
    {*
	{foreach $qBlox as $q => $blox} 
		{if $q == "x{$Xtra|ucfirst}"}
			{foreach $blox as $b => $x}
				{if $x.backdoor}

				{if !$x.col}
					{$col = 6}
				{else}
					{$col = $x.col}
				{/if}

					{if $method != 'index' && $x.filter == $method}
						{include file="~widgets/col.tpl"   method="$b" title=$x.blox}
					{elseif $method == 'index'}
						{include file="~widgets/col.tpl"  method="$b" title=$x.blox}
					{/if}
				{/if}
			{/foreach}
		{/if}
	{/foreach}
	*}
</div>

<script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>