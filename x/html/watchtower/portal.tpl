<div class="row"> 
    <div class="col-md-12 widget-container ">  
        <section class="widget locked"> 
            <div class="jumbotron handle">
                <div class="container">   
                    <div id="carousel-watchtower" class="carousel slide">
                        <ol class="carousel-indicators outer">
                            <li data-target="#carousel-watchtower" data-slide-to="{counter start=0}" class="{if $anchor == 'index'}active{/if}"></li>
                            {foreach $admin_menu as $key => $item}
                                {if $key}  
                            <li data-target="#carousel-watchtower" data-slide-to="{counter}" class="{if $anchor == $key}active{/if}"></li>    
                                {/if}
                            {/foreach} 
                        </ol>
                        <div class="carousel-inner text-align-center">
                            <div class="item {if $anchor == 'index'}active{/if}">
                                <h1><i class="fa fa-4x fa-space-shuttle "></i><br/>Hello {$user.username|ucfirst}  </h1>
                                <p >
                                   
                                 Welcome to your Super <b>Spacylecious</b>  Dashboard!
                                   <br/><br/>
                                
                                    <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                                    <a class="btn btn-info btn-lg " href="/{$toBackDoor}/login/profile">
                                        <i class="fa fa-user"></i> {$user.username}
                                    </a>  

                                </p>
                            </div>
                            {foreach $admin_menu as $key => $item}
                                {if $key} 
                            <div class="item {if $anchor == $key}active{/if}">
                                <h1><i class="fa fa-{$key} fa-4x"></i><br/>{$item.area|ucfirst}</h1>
                                <p>
                                    {$item.desc|ucfirst}  
                                        <br/><br/>
                                     {foreach $xtras as $x => $xtra}
                                        {if $xtra.icon && $key == $xtra.see}
                                            
                                            <a  href="/x/{$xtra.link}" title="{$xtra.desc}"  data-placement="top" data-original-title="{$xtra.desc}" class="btn btn-lg {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default" disabled="disabled{/if}" > 

                                               
                                                
                                                <i class="fa fa-{$xtra.mini}  "></i> {$xtra.name} 
                                            </a>
                                        {/if}
                                    {/foreach}
                                </p>
                            </div> 
                                {/if}
                            {/foreach} 
                        </div>
                        <a class="left carousel-control" href="#carousel-watchtower" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-watchtower" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section> 
    </div> 
</div>

    
    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"> </script>
    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.ui.touch-punch.js"> </script>
   <!-- page specific -->
    <script type="text/javascript" src="/x/html/layout/watchtower/js/index.js"></script>
    <script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>