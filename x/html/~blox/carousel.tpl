<!-- Carousel -->
 <div class="block-area">
    <div id="carousel-example-generic" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="{counter start=0}" class="active"></li>
            {foreach $carousel as $key => $item}
                {if $key}  
            <li data-target="#carousel-example-generic" data-slide-to="{counter}" class="{if $anchor == $key}active{/if}"></li>    
                {/if}
            {/foreach} 
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                {$first_slide}
            </div>
            {foreach $carousel as $key => $item}
                {if $key} 
            <div class="item {if $anchor == $key}active{/if}">
                <img src="img/carousel/c-1.jpg" alt="Slide-1">
                <div class="carousel-caption hidden-xs">
                    <h1><i class="fa fa-{$key} fa-4x"></i><br/>{$item.area|ucfirst}</h1>
                    {$item.desc|ucfirst}  
                        <br/><br/>
                     {foreach $xtras as $x => $xtra}
                        {if $xtra.icon && $key == $xtra.see}
                            
                            <a  href="/x/{$xtra.link}" title="{$xtra.desc}"  data-placement="top" data-original-title="{$xtra.desc}" class="btn btn-lg {if $xtra.alpha}btn-danger{elseif $xtra.beta}btn-warning{elseif $xtra.delta}btn-success{elseif $xtra.omega}btn-primary{else}btn-default" disabled="disabled{/if}" > 

                               
                                
                                <i class="fa fa-{$xtra.mini}  "></i> {$xtra.name} 
                            </a>
                        {/if}
                    {/foreach}
                </div>
            </div> 
                {/if}
            {/foreach} 
            <!-- <div class="item ">
                <img src="img/carousel/c-1.jpg" alt="Slide-1">
            </div>
            <div class="item">
                <img src="img/carousel/c-2.jpg" alt="Slide-2">
                <div class="carousel-caption hidden-xs">
                    <h3>This is a Caption</h3>
                    <p>Sample detail text here</p>
                </div>
            </div>
            <div class="item">
                <img src="img/carousel/c-3.jpg" alt="Slide-3">
                <div class="carousel-caption hidden-xs">
                    <h3>This is a Caption</h3>
                    <p>Sample detail text here</p>
                </div>
            </div> -->
        </div>
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <i class="icon">&#61903;</i>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <i class="icon">&#61815;</i>
        </a>
    </div> 

</div>