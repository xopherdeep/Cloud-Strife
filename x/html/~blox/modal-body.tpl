<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title">{$title}</h4>
</div>

<div class="modal-body">
    {if $load}
    {fetch file="http://$HTTP_HOST/$toSideDoor/$load"} 
    {else}
    <style type="text/css">
        @-webkit-keyframes loaderSprite {
            from { background-position: 0px; }
            to { background-position: -2500px; }
        }

        @-moz-keyframes loaderSprite {
            from { background-position: 0px; }
            to { background-position: -2500px; }
        }

        @keyframes loaderSprite {
            from { background-position: 0px; }
            to { background-position: -2500px; }
        }

        .atom {
            width             : 100px;
            height            : 100px;  
            background-image  : url("{$_DIR}images/loading.png");
            -webkit-animation : loaderSprite 1s steps(25, end) infinite;
            -moz-animation    : loaderSprite 1s steps(25, end) infinite;
            animation         : loaderSprite 1s steps(25, end) infinite;
            display           : block;
            position          : relative;
            margin            : auto;
            top               : 0;
            left              : 0;
            text-align        : center;
        }

        #loader{
            background: none;
        }

    </style>
    <div id="loader">
        <div>   
            <span class="atom" /></span>
            <p id="loadtext" >
                loading {$load} &hellip;
            </p>  
        </div>
    </div>
    {/if}
</div>
<div class="modal-footer m-0">
    {foreach $buttons as $button => $b}
        <button class="btn {$b.class}" {if $b.dismiss}data-dismiss="modal"{/if} {if $b.click}onclick="{$b.click}"{/if} >{$b.html}</button>
    {/foreach}
    <!-- <button class="btn pull-right" ><i class=""></i>Cancel</button> -->
</div>