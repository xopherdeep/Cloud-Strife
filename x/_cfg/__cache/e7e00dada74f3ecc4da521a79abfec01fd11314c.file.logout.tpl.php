<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:38:46
         compiled from "/home/xopher/git/superdom/x/Oxygen/xLogin/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45480695153c8a4d6821dd0-45810702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7e00dada74f3ecc4da521a79abfec01fd11314c' => 
    array (
      0 => '/home/xopher/git/superdom/x/Oxygen/xLogin/logout.tpl',
      1 => 1405657567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45480695153c8a4d6821dd0-45810702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_message' => 0,
    'login_title' => 0,
    'site_name' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a4d6867792_69661261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a4d6867792_69661261')) {function content_53c8a4d6867792_69661261($_smarty_tpl) {?><div class="container">
	<div class="jumbotron">

	<h1 style="display: inline;">
		<i class="fa fa-lock fa-5x pull-right text-danger">
			
		</i><?php echo $_smarty_tpl->tpl_vars['login_message']->value;?>

	</h1> 
	<h3 ><?php echo $_smarty_tpl->tpl_vars['login_title']->value;?>
</h3>	
			
		<div class="btn-group">
			<button class="btn btn-info btn-lg" onclick="history.back()" style="float: left" value="Connect"  >
	 		<i class="fa fa-backward"></i> Back
			</button> 
			
			<button  class="btn btn-success btn-lg" onclick="location = location.origin"  value="Connect" >
		 		 <i class="fa fa-globe"></i> <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>

			</button>

			<button  class="btn btn-warning btn-lg" onclick="location = './'"  value="Connect" >
		 		 <i class="fa fa-key"></i> Login
			</button>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class=" label label-sm badge ">powered by<br/>  
			<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value;?>
src=/bin/images/logos/sdx.png&h=16"/></p>

		</div>
	</div>
</div> <?php }} ?>
