<?php
	/**
	 * x.engine.php
	 * 
	 * Copyright 2014 Xopher Dee P <heylisten@xtiv.net>
	 * @TODO: Keep Being Awesome
	 * 
	 * This program is free software; you can redistribute it and/or modify
	 * it under the terms of the GNU General Public License as published by
	 * the Free Software Foundation; either version 2 of the License, or
	 * (at your option) any later version.
	 * 
	 * This program is distributed in the hope that it will be useful,
	 * but WITHOUT ANY WARRANTY; without even the implied warranty of
	 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 * GNU General Public License for more details.
	 * 
	 * You should have received a copy of the GNU General Public License
	 * along with this program; if not, write to the Free Software
	 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
	 * MA 02110-1301, USA.
	 * 
	 * 
	 */
	 
	// Ready.
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
