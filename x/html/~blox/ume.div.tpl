{foreach $tpl.div as $div => $d}
	{$HTML = ['div'=>$d]}
	{include "~blox/html.tpl" HTML=$HTML}
{/foreach}