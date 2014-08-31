<!-- 
	At Side Door
	{$tpl} not found
	Current:
		Action: {$Xtra}
		Method: {$method}

	Original: 
		Action: {$not_found.action}
		Method: {$not_found.method}
 --> 
{include file="../../../{$suite}/x{$Xtra|ucfirst}/$method.tpl"}