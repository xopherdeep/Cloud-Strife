{$html="html"}

{if $tpl.type}
	{$html=$tpl.type}
{/if}

{include file="~blox/ume.{$html}.tpl" tpl=$tpl}