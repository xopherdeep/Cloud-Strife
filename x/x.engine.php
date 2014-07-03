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
	require("__cfg/lang.cfg");
	require("__cfg/x.cfg");
	require('Hydrogen/x4deep/xengine.php');

	// Set
	$X = new Xengine($cfg);
	
	// GO!
	$X->knock();
?>
