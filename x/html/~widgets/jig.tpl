 <section class="widget {if $large}large{/if} {if $locked}locked{/if}" data-widgster-collapsed="{if $collapsed}true{/if}" id="default-widget" data-widgster-load="/{$toBackDoor}/{$toSideDoor}/{if $xPHP!=''}{$xPHP}{else}{$Xtra}{/if}/{$method}" data-widgster-autoload="true">
 {if !$header}
    <header>
        {$path = "/"|explode:$xPHP} 
        <span style="position: absolute; left: 0; top: 0">
            {if $portal}
                 {foreach $xtras as $xtra => $x}
                    {if $path[0] == $x.class|strtolower|substr:1}
                        <i class="fa fa-{$x.see}"></i> 
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-{$x.mini}"></i> 
                    {/if}
                {/foreach} 
            {else}
                {foreach $xtras as $xtra => $x}
                    {if $path[0] == $x.class|strtolower|substr:1} 
                        <i class="fa fa-{$x.mini}"></i> 
                    {/if}
                {/foreach} 

                
            {/if}
        </span>
        <h5 class="text-align-center">  
            {$title}
        </h5>
        <div class="widget-controls">
            {if $portal} 
                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>

                <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 


                <a data-widgster="close" title="Close" href="#"
                onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"
                ><i class="glyphicon glyphicon-remove"></i></a> 
                <a data-widgster="watchtower" title="{if $portal}Stop Watching{else}Add to Watchtower{/if}" 
                href="javascript:" onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"><i class="fa fa-eye{if $portal}-slash{/if}"></i></a>
            {else}
                <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>

                <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 

                <a data-widgster="watchtower" title="{if $portal}Stop Watching{else}Add to Watchtower{/if}" 
                href="javascript:" onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"><i class="fa fa-eye{if $portal}-slash{/if}"></i></a>
            {/if}
        </div>
    </header>
{/if}
    <div class="body"> 
        {* include some javascript in your template *} 
        {if $xPHP!=''}
            {* fetch file="http://$HTTP_HOST/$toSideDoor/$xPHP/$method" *} 
        {else}
            {* fetch file="http://$HTTP_HOST/$toSideDoor/$Xtra/$method" *} 
        {/if}
    </div>
    <div class="footer text-align-center">
         <a data-widgster="load" title="Reload" href="#" ><i class="glyphicon glyphicon-refresh"></i></a> 
    </div>
</section>