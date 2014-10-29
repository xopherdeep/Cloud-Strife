<div class="{if !$i.col}col-sm-12{else}{$i.col}{/if}">
  <!-- {* TPL VARS *}
  {$_id = "{$Xtra|md5|substr:0:2}-{$name|md5|substr:0:5}"}

  {if !$i.txt}
    {$txt = "{$name|replace:'_':' '|ucwords}"}
  {else}
    {$txt = $i.txt}
  {/if} 

  {if !${$Xtra}_{$name}}
    {$name = {$name|replace:"{$Xtra}_":''} }
  {/if}
  -->
  <div class="input-group col-sm-12" style="margin: 5px">  
      <!-- <span {if $i.tip}class="input-group-btn popover-test" data-content="{$i.tip}" data-original-title="{$txt}"{/if}
        class="input-group-btn" title="{$txt}"  style="width: 35px;">
          <a class="btn btn-alt btn-default btn-transparent pull-left" {if $i.href}href="{$i.href}" target="_blank" {/if} type="button"  style="width: 100%">
              <i class="fa fa-question"  ></i> 
          </a>
      </span> -->


      <span class="input-group-btn" style="width: 35px">
          <a id="btn-{$_id}" class="btn btn-alt btn-success btn-block active" type="button" onclick="window.config.save(this,{ {$name} : $('#{$_id}').val() })">
               <i class="{$i.icon}" id="i-{$_id}"></i>
          </a>
      </span>

      {if $i.type == 'radio'}
  	  <div class="btn-group pull-right col-sm-12 no-margin no-padding" data-toggle="buttons">
          {$cols = $i.labels|count|intval}
          {$cols = 12 / $cols}
          {foreach $i.labels as $label => $l} 
  	        <label id="{$_id}" class="btn btn-transparent col-sm-{$cols} {if ${$name} == $l.value}active{/if} {if $l.tip}tooltips underline{/if}" 
                    {if $l.tip}
                        data-toggle="tooltip" title="" data-original-title="{$l.tip}"
                         data-placement="bottom"
                    {/if}   onclick="window.config.save(this,{ {$name} : '{$l.value}' })">
  	            <input  name="{$name}" value="{$l.value}" type="radio"  > {$l.txt}
  	        </label> 
          {/foreach} 
      </div>
      {else if $i.type == 'textarea'}
        <textarea 
             id           ="{$_id}"
             data-trigger ="change" 
             required     ="required"
             class        ="form-control{if $i.tip}tooltips underline{/if}" 
              {if $i.tip}
                  data-toggle="tooltip" title="" data-original-title="{$i.tip}"
                   data-placement="bottom"
              {/if} 
             
             
             name         ="{$name}" 
             value        ="{if ${$Xtra}_{$name}}{${$Xtra}_{$name}}{else}{${$name}}{/if}" 
             placeholder  ="{$txt}"
             onblur       ="window.config.save(this,{ {$Xtra}_{$name} : this.value })" 
             style        ="width: 100%"
             placeholder  ="{$txt}"
        ></textarea>
      {else}
      <input id="{$_id}" type="{if !$i.type}text{else}{$i.type}{/if}"
             data-trigger="change" required="required"
             
             name="{$name}" value="{if ${$Xtra}_{$name}}{${$Xtra}_{$name}}{else}{${$name}}{/if}" placeholder="{$txt}"
             onblur="window.config.save(this,{ {$Xtra}_{$name} : this.value })" style="width: 100%"
             class="form-control {if $i.tip}tooltips underline{/if}" 
                    {if $i.tip}
                        data-toggle="tooltip" title="" data-original-title="{$i.tip}"
                         data-placement="bottom"
                    {/if} 
                   
             > 
      {/if}
  </div>
</div>