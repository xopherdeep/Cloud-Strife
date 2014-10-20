<div class="tab-container media {if $tpl.class}{$tpl.class}{else}tile{/if}">
    {$tabs = $tpl.menu}
    {if $tabs} 
        {capture assign="tbar"}
            <ul class="tab nav nav-tabs 
                {if $tpl.vertical}
                    {if $tpl.right}pull-right{else}pull-left{/if}
                    tab-vertical
                {else}
                    {if $tpl.right}tab-right{else}tab-left{/if}
                {/if}"> 
            {foreach $tabs as $menu => $m}
                <!-- @TODO: Move styles to css sheet -->
                <li style="margin-bottom: 0px" class="{if $m.active}active{/if} {if $m.tip}tooltips underline{/if}" 
                    {if $m.tip}
                        data-toggle="tooltip" title="" data-original-title="{$m.tip}"
                        {if $tpl.vertical}
                            {if $tpl.right}
                                data-placement="left"
                            {else}
                                data-placement="right"
                            {/if} 
                        {else}
                            {if !$tpl.bottom}
                                data-placement="right"
                            {else}
                                data-placement="top"
                            {/if} 
                        {/if}
                    {/if} 
                   >
                    <a href="#tab-{$m.title|md5|substr:0:5}" {if $m.onclick}onclick="{$m.onclick}"{/if} class="active" >
                        <i class="{$m.icon}">{$m.ico}</i> 
                        {$m.title} 
                    </a> 
                </li>
            {/foreach}
            </ul>        
        {/capture}


        {if !$tpl.bottom}
            {$tbar}
        {/if}

        <div class="tab-content media-body ">
        {foreach $tabs as $tab => $t}
             <div class="tab-pane {if $t.active}active{/if}" id="tab-{$t.title|md5|substr:0:5}">
                {if $t.type|strlen > 1}
                    {include file="~blox/ume.tpl" tpl=$t}
                {else}
                    {$t.type = $tpl.type}
                    {include file="~blox/ume.tpl" tpl=$t}
                {/if}
            </div>  
        {/foreach}
        </div> 

        {if $tpl.bottom && !$tpl.top}
            {$tbar}        
        {/if}
    {/if} 
</div>