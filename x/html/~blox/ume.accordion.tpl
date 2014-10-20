<div class="accordion tile">
    <div class="panel-group block" id="{$tpl|md5|substr:0:5}">
        {foreach $tpl.menu as $menu => $t}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <!-- @TODO: Move styles to css sheet -->
                    <a class="accordion-toggle active" data-toggle="collapse" data-parent="#{$tpl|md5|substr:0:5}" href="#tab-{$t.title|md5|substr:0:5}" style="border: 0;">
                        <i class="{$t.icon}"></i> 
                        {$t.title}
                    </a>
                </h3>
            </div>
            
            <div id="tab-{$t.title|md5|substr:0:5}" class="panel-collapse collapse {if !$t.active}in{/if}">
                <div class="panel-body">
                    {if $t.type|strlen > 1}
                        {include file="~blox/ume.tpl" tpl=$t}
                    {/if}
                </div>
            </div>
        </div>
        {/foreach} 
    </div>
</div>