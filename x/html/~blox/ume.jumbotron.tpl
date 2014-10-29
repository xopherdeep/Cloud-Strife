<div class="jumbotron tile-light">
    <div class="container">        
        <h2> 
            <i class="fa fa-2x {$tpl.icon} pull-right">{$tpl.ico}</i>
            {$tpl.head}
        </h2> 
        <blockquote>{$tpl.quote}</blockquote> 
        
        {foreach $LANG.XSHOP.JUMBO.BTN as $b => $btn}
            <!-- <a class="btn btn-lg {$btn.class}" href="/{$toBackDoor}/{$Xtra}/{$b}">
                {$btn.a}
            </a> -->
        {/foreach} 
    </div>
</div>  

