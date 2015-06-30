<style type="text/css">
    
    .carousel-control.left {
        left: -75px;
    }

    .carousel-control.right {
        right: -75px;
    }

</style>

<div class="row widget-container "> 
    <div class="col-md-12">
        
    </div>
    <div class="col-md-12 ">  
        <!-- <h2 class="page-title">{$user.username}, Welcome to SuperdomX <small>Oxygen</small></h2> -->
        <section class="widget locked"> 
            <div class="widget-controls">
                {if $portal} 
                     
                    <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                    <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 


                    <a data-widgster="load" title="Reload" href="#" ><i class="glyphicon glyphicon-refresh"></i></a> 

                    <a data-widgster="close" title="Close" href="#"
                    onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"
                    ><i class="glyphicon glyphicon-remove"></i></a> 
                    <a data-widgster="watchtower" title="{if $portal}Stop Watching{else}Add to Watchtower{/if}" 
                    href="javascript:" onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"><i class="fa fa-eye{if $portal}-slash{/if}"></i></a>

                    <a data-widgster="info" title="Learn More" href="#"><i class="glyphicon glyphicon-question-sign"></i></a> 
                    
                {else}
    

                    <a data-widgster="fullscreen" title="Learn More" href="#"><i class="glyphicon glyphicon-question-sign"></i></a>                      
                     
                    <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a> 
                    <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a> 
                    
                    <a data-widgster="close" title="Close" href="#"
                    onclick="window.addBloxToTower('{$title}','{if $xPHP!=''}{$xPHP}{else}{$Xtra}/{$method}{/if}',{$col}, this);"
                    ><i class="glyphicon glyphicon-remove"></i></a> 

                    
                {/if}
            </div>
            <div class="jumbotron handle">
                <div class="container" style="text-align: center;">   
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
                                <h1  data-widgster="fullscreen" ><i class="fa fa-4x fa-eye pull-left"></i><br/>The <b>Watchtower</b>
                                
                                </h1>
                                <h1  data-widgster="restore" ><i class="fa fa-4x pull-left">&#9820; </i><br/>"Your Castle on the Cloud"</h1>

                                <p >
                                    <!-- Welcome to your Super <b>Spacylecious</b> Watchtower. -->
                                    <!-- Take a moment and explore this now <b>Super Powered </b> domain.<br/> -->
                                    The <b>Watchtower</b> is a customizable dashboard for your <b>Super Domain</b>.<br/>
                                    
                             
                                    
                                   <br/><br/> 
                                    <a class="btn btn-white btn-lg"  data-widgster="fullscreen" >
                                         <!-- <i class="fa fa-eye"></i>  -->
                                         Learn more 
                                         <i class="fa fa-eye"></i>
                                    </a>
                                   

                                    <div class="row" data-widgster="restore">

                                    <h2>
                                        Use the <i class="fa fa-eye"></i> icon to view the panel in the <B>Watchtower</B>
                                    </h2>

                                        <div class="col-sm-6 col-md-4">
                                           <div class="thumbnail tile">
                                                <img src="img/tutor/tower-1.png" alt="">
                                                <div class="p-15">
                                                    <h4>Click a panel's <i class="fa fa-eye"></i> icon</h4>
                                                    <!-- <p>Every Panel can be viewed on the watchtower. </p> -->
                                                    <!-- <p>
                                                        <a href="" class="btn btn-info btn-sm">Button</a>
                                                        <a href="" class="btn btn-info btn-sm">Button</a>
                                                    </p> -->
                                                </div>
                                           </div>
                                        </div>


                                        <div class="col-sm-6 col-md-4">
                                           <div class="thumbnail tile">
                                                <img src="img/tutor/tower-2.png" alt="">
                                                <div class="p-15">
                                                    <h4>Click it again to remove it from the watch tower.</h4>
                                                    <!-- <p>Rearrange your castle in the clouds how you want it!</p> -->
                                                    <!-- <p>
                                                        <a href="" class="btn btn-info btn-sm">Button</a>
                                                        <a href="" class="btn btn-info btn-sm">Button</a>
                                                    </p> -->
                                                </div>
                                           </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4">
                                           <div class="thumbnail tile">
                                                <img src="img/tutor/tower-3.png" alt="">
                                                <div class="p-15">
                                                    <h4>Drag & Drop Panels however you wish</h4>
                                                    <!-- <p>All panels at the watchtower can be rearranged however you please.</p> -->
                                                   <!--  <p>
                                                        <a href="" class="btn btn-info btn-sm">Button</a>
                                                        <a href="" class="btn btn-info btn-sm">Button</a>
                                                    </p> -->
                                                </div>
                                           </div>
                                        </div>



                                    </div>

                                </p>
                            </div>
                            {foreach $admin_menu as $key => $item}
                                {if $key} 
                            <div class="item {if $anchor == $key}active{/if}">
                                <h1><i class="fa fa-{$key} fa-4x pull-left"></i><br/>{$item.area|ucfirst}</h1>
                                <p>
                                    {$item.desc|ucfirst}  
                                    <br/><br/>



                                    {$counter = 0}
                                    {foreach $xtras as $x => $xtra}
                                        {if $xtra.icon && $key == $xtra.see}
                                            
                                            <a  href="/x/{$xtra.link}" title="{$xtra.desc}"  data-placement="top" data-original-title="{$xtra.desc}" class="btn btn-lg 
                                            {if $xtra.alpha || $xtra.beta || $xtra.delta || $xtra.omega}btn-transparent{else}btn-default hidden" disabled="disabled{/if}
                                            " > 

                                               <!-- {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default" disabled="disabled{/if} -->
                                                
                                                <i class="fa fa-{$xtra.mini}  "></i> {$xtra.name} 
                                            </a>

                                        {$counter = 1 + $counter}
                                        {/if}
                                    {/foreach}

                                    {$counter = 12 / $counter} 
                                    <br/><br/>
                                    <div class="row" data-widgster="restore">
                                        {foreach $xtras as $x => $xtra}
                                            {if $xtra.icon && $key == $xtra.see}
                                                <div class="col-sm-{$counter} col-md-{$counter}">
                                                   <div class="thumbnail tile">
                                                        <img src="img/tutor/tower-1.png" alt="">
                                                        <div class="p-15">
                                                            <h4>{$xtra.name}</h4>
                                                            <p>{$xtra.desc}</p>
                                                            <!-- <p>
                                                                <a href="" class="btn btn-info btn-sm">Button</a>
                                                                <a href="" class="btn btn-info btn-sm">Button</a>
                                                            </p> -->
                                                        </div>
                                                   </div>
                                                </div>
                                            {/if}
                                        {/foreach}

                                       

                                         
                                    </div>

                                </p>
                            </div> 
                                {/if}
                            {/foreach} 
                        </div>
                        <a class="left carousel-control" href="#carousel-watchtower" data-slide="prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-watchtower" data-slide="next">
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </a>

                    </div>
                    <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                    <br/>
                    <a class="btn btn-danger btn-lg " data-widgster="restore">
                        <i class="fa fa-ban"></i> Close
                    </a>  
                </div>
            </div>
        </section> 
    </div>  

    {$portal = true}
    {foreach $watchtower.data as $r => $t}  
        {if $t.path} 
            {include file="~widgets/col.tpl" col=$t.col xPHP=$t.path title=$t.title}
        {/if}
    {/foreach}
</div>
    
<!-- page specific -->
<script type="text/javascript" src="/x/html/layout/watchtower/js/index.js"></script>