{foreach $tpl.btns as $btn => $b}
	{$HTML = ['button'=>$b]}
	{include "~blox/html.tpl" HTML=$HTML}
{/foreach}