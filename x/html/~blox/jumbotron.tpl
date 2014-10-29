<div class="jumbotron tile-light">
    <div class="container">
        <p>{$j.icon}</p>
        <h1>{$j.head}</h1>
        <!-- <blockquote>{$j.quote}</blockquote> -->
        <p>{$j.quote}</p>
        {foreach $btns as $bt => $btn}
            <a href="#{$btn.href}" class="{$btn.class}" {$btn.data}>
                {$btn.html}
            </a>
        {/foreach}
      </div>
 </div>