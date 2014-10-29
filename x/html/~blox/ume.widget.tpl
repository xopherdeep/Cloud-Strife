<!-- {$tpl.title} Widget -->
<div class="tile">
   {if $tpl.title} 
        <h2 class="tile-title">{$tpl.title}</h2>
   {/if}
   <!--  <div class="tile-config dropdown">
        <a data-toggle="dropdown" href="#/" class="tooltips tile-menu" title="" data-original-title="Options"></a>
        <ul class="dropdown-menu pull-right text-right"> 
            <li><a href="#/">Edit</a></li>
            <li><a href="#/">Delete</a></li> 
        </ul> 
    </div> -->
    {include "~blox/ume.tpl" tpl=$tpl.widget}
</div>