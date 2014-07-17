<?php
	/*
	 * Point to this file from root & enable Clean URL 
    
    	--- www.domain.com/index.php
    	require('x/x.engine.php');
	
	 --- .htaccess @ www.domain.com/.htaccess
    	<IfModule mod_rewrite.c>
		RewriteEngine On
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . ./index.php [L]
	</IfModule>	

	--- .htaccess @ www.domain.com/x/.htaccess
	DirectoryIndex ../index.php
	*/

	// Ready
	// @todo: Keep Being Awesome.
	require("_cfg/lang.cfg");
	require("_cfg/x.cfg");
	$engine = $cfg['dir']['libs'].'/x4deep/xengine.php';

	if( is_dir($cfg['dir']['libs']) && is_dir($cfg['dir']['Xtra'])  && is_file($engine) ){ 
		require($engine);  
		// Set
		$X = new Xengine($cfg); 
		// GO!
		$X->knock();
	}else{
		require $cfg['dir']['backdoor'].'/install.php';
	}

?>
