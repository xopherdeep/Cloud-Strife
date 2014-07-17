<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-17 03:11:34
         compiled from "x/html/layout/sidedoor/frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90094456553c722c6e6a7c6-95463037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7268defe6d891fac96b65293bb3cafe0ed446f0' => 
    array (
      0 => 'x/html/layout/sidedoor/frame.tpl',
      1 => 1405548041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90094456553c722c6e6a7c6-95463037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TPL_EXISTS' => 0,
    'Xtra' => 0,
    'suite' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c722c7150b17_66401246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c722c7150b17_66401246')) {function content_53c722c7150b17_66401246($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['TPL_EXISTS']->value&&$_smarty_tpl->tpl_vars['Xtra']->value!=''&&($_smarty_tpl->tpl_vars['Xtra']->value!='index')) {?>
	<?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_tmp1."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['Door']->value)."/portal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
