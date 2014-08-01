<div class="row"> 
    <div class="col-md-12 widget-container ">  
        <section class="widget locked">
            
            <div class="jumbotron handle">
                <div class="container">
                    <div class="widget-controls" data-widgster="restore">
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                        <a data-widgster="load" title="I am spinning!" href="#"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide">
                        <ol class="carousel-indicators outer">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
                            {foreach $admin_menu as $key => $item}
                                {if $key} 
                                    <li data-target="#key" data-slide-to="{counter start=1}"></li>    
                                {/if}
                            {/foreach} 
                        </ol>
                        <div class="carousel-inner text-align-center">
                            <div class="item active" id="0">
                                <h1><i class="fa fa-4x fa-space-shuttle "></i><br/>Hello {$user.username|ucfirst}  </h1>
                                <p class="lead">
                                   
                                Welcome to your Super <b>Space-i-licious</b>  Dashboard!
                                   
                                </p>
                                <p class="text-align-center">
                                    <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                                    <a class="btn btn-info btn-lg " href="/{$toBackDoor}/login/profile">
                                        <i class="fa fa-user"></i> {$user.username}
                                    </a>
                                    <a class="btn btn-info btn-lg " data-widgster="restore">
                                        Watchtower
                                    </a>
                                </p>
                            </div>

                            {foreach $admin_menu as $key => $item}
                                {if $key} 
                                    <div class="item " id="{$key}">
                                        <h1><i class="fa fa-{$key} fa-4x"></i><br/>{$item.area|ucfirst}</h1>
                                        <p class="lead">
                                            {$item.desc|ucfirst} 
                                        </p> 
                                        <p class="text-align-center">
                                            
                                                 
                                             {foreach $xtras as $x => $xtra}
                                                {if $xtra.icon && $key == $xtra.see}
                                                    <!-- <img src="{$ICON.48}{$xtra.icon}" desc="{$xtra.desc}" link="{$xtra.link}" file="{$x}" icon="{$xtra.icon}" title="{$xtra.name}">  -->
                                                    
                                                    <a  href="/x/{$xtra.link}" title="{$xtra.desc}"  data-placement="top" data-original-title="{$xtra.desc}" class="btn btn-lg {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default" disabled="disabled{/if}" > 

                                                       
                                                        
                                                        <i class="fa fa-{$xtra.mini}  "></i> {$xtra.name} 
                                                    </a>
                                                {/if}
                                            {/foreach}
                                             
                                              
                                        </p>
                                    </div>
                                   

                                   <!--  <div align="center" id="map-{$key}" area="{$key}" style="overflow: hidden"> 
                                        <img src="{$ICON.A}{$key}.png"  id="area-{$key}" height="128" width="128" >
                                        {foreach $xtras as $x => $xtra}
                                            {if $xtra.icon && $key == $xtra.see}
                                            <img src="{$ICON.48}{$xtra.icon}" desc="{$xtra.desc}" link="{$xtra.link}" file="{$x}" icon="{$xtra.icon}" title="{$xtra.name}"> 
                                            {/if}
                                        {/foreach}
                                        <p>{$item.area|ucfirst}</p>
                                        <span class="transparent-black-25" style="display: none; height: 48px; padding : 5px;">
                                            <img align="absmiddle" style="margin: 5px;" />
                                            <h1 style="float: left; margin-left: 60px;"></h1>
                                            <h3 style=" "></h3>
                                        </span> 
                                    </div>   -->
                                {/if}
                            {/foreach}

                           <!--  <div class="item">
                                <h1>The SuperDom neXus</h1>
                                <p class="lead">
                                    Or as we like to call it... <em>SuperDomX</em>! 
                                </p> 
                                <p class="text-align-center">
                                    <a class="btn btn-info btn-lg ">
                                       Connect to the <em>neXus</em>! &nbsp;
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </p>
                            </div>
                            <div class="item">
                                <h1>Blox & Costumez</h1>
                                <p class="lead">
                                    Check our the plethora of contributions from other <em>Users</em>! 
                                </p> 
                                <p class="text-align-center">
                                    <a class="btn btn-danger btn-lg ">
                                       Get More <em>Pieces</em>! &nbsp;
                                        <i class="fa fa-puzzle-piece"></i>
                                    </a>
                                </p>
                            </div>
                        </div> -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>


                    <!-- <span class="label label-default">Key: </span>
                    <span class="label label-danger">&alpha;</span>
                    <span class="label label-warning">&beta;</span>
                    <span class="label label-success">&Delta;</span>
                    <span class="label label-primary">&Omega;</span>
 -->
                    <div class="col-md-6" data-widgster="restore"> 
                        <header> 
                            <h4>Welcome to SuperDom <span class="label label-success">&Delta;</span> <small>Your Domain is Now Super!</small></h4> 
                        </header>
                        <div class="body">
                            <p>
                                <i class="fa fa-quote-right fa-3x pull-right fa-border"></i>
                                <blockquote>I hope you feel right at home among your new Super Domain. <strong>Super Dom</strong> was made with everyone in mind. Please take a moment to browse around and get well aquainted. 

                                    SuperDom was built to be:
                                    <ul class="text-list fa-ul">
                                        <li><i class="fa fa-li">&#9822;</i> <strong>Simple</strong></li>
                                        <li><i class="fa fa-li">&#9821;</i> <strong>Clean</strong> </li>
                                        <li><i class="fa fa-li">&#9820;</i> <strong>Fast</strong> </li>
                                        <li><i class="fa fa-li">&#9819;</i> <strong>Elegant</strong>
                                        </li>
                                        <li><i class="fa fa-li">&#9818;</i> <strong>King</strong>
                                        </li>
                                    </ul>

                                </blockquote>
                            </p>
                            
                             
                        </div>
                    </div>



                    <div class="col-md-6" data-widgster="restore"> 
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-home"></i> {$WWW}</a></li>
                            <li><a href=""><i class="fa fa-dashboard"></i> SuperDom</a></li>
                            <li class="active"><i class="fa fa-eye"></i> Watchtower </li>
                        </ol>  
                        <ul class="text-list fa-ul">
                            {foreach $admin_menu as $key => $item}
                                {if $key} 

                                     <li><i class="fa fa-li fa-{$key}"></i>
                                        <span class="name">{$item.area|ucfirst}</span>
                                        <ul > 
                                            {foreach $xtras as $x => $xtra}
                                                {if $xtra.icon && $key == $xtra.see}
                                                     

                                                    {if $xtra.alpha || $xtra.beta || $xtra.delta}
                                                        <li> 
                                                            {if $xtra.alpha}
                                                                <span class="label label-danger">&alpha;</span>
                                                            {/if}
                                                            {if $xtra.beta}
                                                                <span class="label label-warning">&beta;</span>
                                                            {/if}
                                                            {if $xtra.delta}
                                                                <span class="label label-success">&Delta;</span>
                                                            {/if}
                                                            {if $xtra.omega}
                                                                <span class="label label-primary">&Omega;</span>
                                                            {/if}
                                                            <a href="/x/{$xtra.link}" title="{$xtra.desc}"  data-placement="top" data-original-title="{$xtra.desc}">{$xtra.name}
                                                           
                                                            </a>

                                                        </li>
                                                    {/if}
                                                {/if}
                                            {/foreach}
                                        </ul>
                                    </li>

                                   <!--  <div align="center" id="map-{$key}" area="{$key}" style="overflow: hidden"> 
                                        <img src="{$ICON.A}{$key}.png"  id="area-{$key}" height="128" width="128" >
                                        {foreach $xtras as $x => $xtra}
                                            {if $xtra.icon && $key == $xtra.see}
                                            <img src="{$ICON.48}{$xtra.icon}" desc="{$xtra.desc}" link="{$xtra.link}" file="{$x}" icon="{$xtra.icon}" title="{$xtra.name}"> 
                                            {/if}
                                        {/foreach}
                                        <p>{$item.area|ucfirst}</p>
                                        <span class="transparent-black-25" style="display: none; height: 48px; padding : 5px;">
                                            <img align="absmiddle" style="margin: 5px;" />
                                            <h1 style="float: left; margin-left: 60px;"></h1>
                                            <h3 style=" "></h3>
                                        </span> 
                                    </div>   -->
                                {/if}
                            {/foreach}
                        </ul>


                        
                    </div>
                </div>
            </div>
        </section>

        <!--
        {include file="~widgets/jig.tpl" title="Watchtower Feed" Xtra="wwwSetup" method="watchtowerFeed" locked=true collapsed=true}
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Watchtower <span class="label label-success">v.1</span> <small>View your Whole Domain from the Top Down.</small></h2>
            </div>
        </div>
        -->
         
    </div>
    <!-- <div class="col-md-3  widget-container ">
        {include file="~widgets/top_x_shortcuts.tpl"}  
    </div>  -->
</div>

    
    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"> </script>
    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.ui.touch-punch.js"> </script>
   <!-- page specific -->
    <script type="text/javascript" src="/x/html/layout/watchtower/js/index.js"></script>
 
    <script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
 