<!-- <pre>
{$HTML|var_dump}
</pre> -->

{foreach $HTML as $html => $x}
{if $html != 'tip'  && $html != 'col'  &&  $html != 'class' && $html != 'attr' && $html != 'html' && $html != 'inc' && $html != 'href' && $html|substr:0:4 != 'data'}
<!-- BEGIN:{$html} -->
<{$html} 
	{if $x.href}href="{$x.href}"{/if} 
	{if $x.class}class="{$x.class} {if $x.tip}tooltips underline{/if}" {/if} 
    {if $x.tip}
        data-toggle="tooltip" title="" data-original-title="{$x.tip}"
        data-placement="top"
    {/if} 
	{foreach $x.attr as $attr => $a} 
		{$attr}={$a} 
	{/foreach}
>
	{if $x|is_string}
		{$x}
	{else}
		{if $x.html|is_array}
			{* include "~blox/html.tpl" HTML=$x.html *}	
		{elseif $x.html|is_string}
			{$x.html}
		{/if}
		{if $x.inc}
			{include "{$x.inc}"}
		{/if}
	{/if}
	{if $x|is_array}
		{include "~blox/html.tpl" HTML=$x}	
	{/if}
</{$html}>
<!-- END:{$html} -->
{/if}
{/foreach}
