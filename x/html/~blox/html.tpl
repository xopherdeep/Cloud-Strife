{foreach $HTML as $html => $x}
<!-- BEGIN:{$html} -->
<{$html} {foreach $x.attr as $attr => $a} {$attr}={$a} {/foreach}>
	{if $x.html|is_array}
		{include "~blox/html.tpl" HTML=$x.html}
	{elseif $x.html|is_string}
		{include "{$x.html}"}
	{/if}
</{$html}>
<!-- END:{$html} -->
{/foreach}