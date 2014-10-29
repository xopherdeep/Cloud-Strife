{foreach $tpl.a as $a => $b}
	{$HTML = ['a'=>$b]}
	{include "~blox/html.tpl" HTML=$HTML}
{/foreach}