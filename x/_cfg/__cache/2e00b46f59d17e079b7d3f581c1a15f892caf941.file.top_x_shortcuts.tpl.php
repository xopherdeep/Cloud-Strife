<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:38:35
         compiled from "x/html/~widgets/top_x_shortcuts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116028947853c8a4cb797994-42448700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e00b46f59d17e079b7d3f581c1a15f892caf941' => 
    array (
      0 => 'x/html/~widgets/top_x_shortcuts.tpl',
      1 => 1405643017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116028947853c8a4cb797994-42448700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'top_ten' => 0,
    'key' => 0,
    'toBackDoor' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a4cb7be355_83587640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a4cb7be355_83587640')) {function content_53c8a4cb7be355_83587640($_smarty_tpl) {?><section class="widget ">
    <h5><STRONG>Top Ten</STRONG> Areas</h5>
     
    <div class="list-group"> 
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['top_ten']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value) {?>
                <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="list-group-item">
                    <i class="fa fa-chevron-right pull-right"></i>
                    <span class="badge badge-success"> <?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
   </span>
                    <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['item']->value['mini'];?>
 "></i>&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
     
                </a> 
            <?php }?> 
        <?php } ?> 
    </div>
</section><?php }} ?>
