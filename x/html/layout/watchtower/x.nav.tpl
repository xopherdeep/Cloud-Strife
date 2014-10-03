{if $masterKey.is.user}     
    {assign var="php" value="x{$Xtra|ucfirst}.php"}
    <head><title>{$xtras.$php.name}: {$xtras.$php.desc} | Super Dom</title></head>             
    
    
    <div class="row"> 
        <div class="col-md-12 widget-container " style="position: relative; z-index: 1;"> 
            <section class="widget locked">
             
                <ol class="breadcrumb">
                    <!-- <li><a href="/x" onclick="return false;" target="_blank"><i class="fa fa-globe"></i> www</a></li> -->
                    <li><a href="/{$toBackDoor}"><i class="fa fa-eye"></i> Master Tower</a></li>
                    
                    {foreach $xtras as $x => $xtra}
                        
                        {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
                            <li><a href="/{$toBackDoor}/{$xtra.see}/"><i class="fa fa-{$xtra.see}"></i>
                            {$admin_menu[$xtra.see].area|ucfirst}</a> 
                            </li>
                            <li class="active"><a href="/{$toBackDoor}/{$xtra.link}"><i class="fa fa-{$xtra.mini}"></i>
                            {$xtra.name} 
                            </a> 
                            {if $method == 'index'} 
                            
                            </li>
                            {else}
                                <li class="active">
                                    <a href="/{$toBackDoor}/{$Xtra}/{$method}"><i class="fa fa-{$Xtra}-{$method}"> {$method|ucfirst}</i>
                                </a>
                            {/if}

                        {/if}
                    {/foreach}
                </ol>
                <h2 class="page-title"> 
                    {foreach $xtras as $x => $xtra} 
                        {if $xtra.icon && "x{$Xtra|ucfirst}" == $xtra.class}
                            <i class="fa fa-{$xtra.mini} fa-5x" style="font-size: 500%; position: absolute; z-index: 0; bottom: -50%; left: 100px; color: rgba(0,0,0,0.05)"></i> {$xtra.name|ucfirst}
                            <a href="/{$toBackDoor}/nexus/git/{$xtra.class}" class="hidden-xs btn-xs btn {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default{/if}">{$xtra.version}</a>
                            <small class="hidden-xs">


                            </small>

                            <small class="hidden-xs">
                                {if $method == 'index'}
                                    
                                    {$xtra.desc}
                                {else}
                                    
                                    {$method|ucfirst}
                                {/if} 
                            </small>
                        {/if}
                    {/foreach} 
                </h2>
            </section>  
        </div>
    </div><!-- 
    <div class="row">
        <div class="col-md-12">
            
        </div>
    </div> -->
{/if}