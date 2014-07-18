<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:27:13
         compiled from "x/html/~blox/godbar/navi.nest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9329126353c8a2214ba7c6-95314200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af650e1a59b6c55892434ffcc52e55fbbc29003' => 
    array (
      0 => 'x/html/~blox/godbar/navi.nest.tpl',
      1 => 1405643017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9329126353c8a2214ba7c6-95314200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navi' => 0,
    'l' => 0,
    'link' => 0,
    'linktothe' => 0,
    'sub' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a221575b28_13835050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a221575b28_13835050')) {function content_53c8a221575b28_13835050($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
    <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
       <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['id'], null, 0);?>
    <?php }?>
<?php } ?>  

<?php if ($_smarty_tpl->tpl_vars['linktothe']->value=='') {?>
    <?php $_smarty_tpl->tpl_vars['linktothe'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['link']->value['title']), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars['linktothe'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['linktothe']->value)."/".((string)$_smarty_tpl->tpl_vars['link']->value['title']), null, 0);?>

<?php }?>

<li class="span2 dropdown<?php if ($_smarty_tpl->tpl_vars['sub']->value&&$_smarty_tpl->tpl_vars['children']->value>0) {?>-leftsubmenu<?php }?>">
    <a class="dropdown-toggle" <?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?> data-toggle="dropdown"<?php }?> href="<?php if (!$_smarty_tpl->tpl_vars['sub']->value) {?>/<?php } else { ?>/<?php echo $_smarty_tpl->tpl_vars['linktothe']->value;?>
<?php }?>"> <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>
  <?php if (!$_smarty_tpl->tpl_vars['sub']->value&&$_smarty_tpl->tpl_vars['children']->value>0) {?>   <b class="caret"></b><?php }?>
        <span class="label label-success pull-right">
            <i class="fa fa-hand-o-up"></i>
        </span>
        <span class="label label-info pull-right">
            <i class="fa fa-crosshairs"></i>
        </span>
    </a>
<?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
        <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
           <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value['id'], null, 0);?>
        <?php }?>
    <?php } ?> 
    <?php if ($_smarty_tpl->tpl_vars['children']->value>0) {?>  
        <ul class="dropdown-menu">
            <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
 $_smarty_tpl->tpl_vars['nav']->value = $_smarty_tpl->tpl_vars['l']->key;
?> 
                <?php if ($_smarty_tpl->tpl_vars['l']->value['parent']==$_smarty_tpl->tpl_vars['link']->value['id']) {?> 
                   <?php echo $_smarty_tpl->getSubTemplate ("./navi.nest.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('linktothe'=>$_smarty_tpl->tpl_vars['linktothe']->value,'link'=>$_smarty_tpl->tpl_vars['l']->value,'sub'=>true), 0);?>

                <?php }?>
            <?php } ?>
        </ul> 
    <?php }?>
</li> 
<?php }} ?>
