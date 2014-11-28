<!DOCTYPE html>
<html lang="en">
	{if $Xtra != '' AND $method  != '' AND ($Xtra != 'index')}
		{include file="../../../{$suite}/x{$Xtra|ucfirst}/$method.tpl" assign=XTRA_METHOD}	 
		{$HTML.BODY.HTML = $XTRA_METHOD}
	{else if $HTML.BODY.HTML == ''}
		{include file="$Door/portal.tpl" assign=PORTAL}
		{$HTML.BODY.HTML = $PORTAL}
	{/if}
	<head>
		<title>{$HTML.HEAD.TITLE}</title>  
		<meta charset="utf-8">  
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
 
	 			
		
	</head>	
	<body {* $HTML.BODY.ATTR *} >
		{$HTML.BODY.HTML}

		{*
		{if $HTML.BODY.SCRIPT}
			{$HTML.BODY.SCRIPT}
		{/if} 
		*}


		{if $HTML.BODY.JS}
			<script src="{$HTML.BODY.JS}"></script>
		{/if}

		{if $google_analytics_id}
			<script>
				(function(i,s,o,g,r,a,m){ i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
				ga('create', '{$google_analytics_id}', 'auto');
				ga('send', 'pageview');
			</script>
		{/if}
	</body>
</html>