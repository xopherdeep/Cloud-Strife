<!-- 
{$_id = "{$Xtra|md5|substr:0:2}-{$name|md5|substr:0:5}"}

{if !$i.txt}
	{$txt = "{$name|replace:'_':' '|ucwords}"}
{else}
	{$txt = $i.txt}
{/if} 
-->

<div class="input-group"> 
     <span {if $i.desc}class="input-group-btn popover-test" data-content="{$i.desc}" data-original-title="{$txt}"{/if}
      class="input-group-btn" title="{$txt}" >
        <a class="btn btn-info" {if $i.href}href="{$i.href}" target="_blank" {/if} type="button">
            {$txt}
        </a>
    </span>
    <input id="{$_id}" type="text"
           data-trigger="change" required="required"
           class="form-control"
           name="{$name}" value="{if ${$name}}{${$name}}{else}{/if}"
           onblur="window.config.save(this,{ {$name} : this.value })"> 
    <span class="input-group-btn" >
        <button id="btn-{$_id}" class="btn btn-success" type="button" onclick="window.config.save(this,{ {$name} : $('#{$_id}').val() })">
             <i class="{$i.icon}" id="i-{$_id}"></i>
        </button>
    </span>
</div>