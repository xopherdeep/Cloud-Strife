<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:51:36
         compiled from "x/html/~widgets/jig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201397228953c8a7d83c0b62-73892470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79860f9285c1efdad3a3a610b6807e30139891cc' => 
    array (
      0 => 'x/html/~widgets/jig.tpl',
      1 => 1405643017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201397228953c8a7d83c0b62-73892470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'locked' => 0,
    'collapsed' => 0,
    'toBackDoor' => 0,
    'xPHP' => 0,
    'Xtra' => 0,
    'method' => 0,
    'header' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a7d845a760_34398458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a7d845a760_34398458')) {function content_53c8a7d845a760_34398458($_smarty_tpl) {?> <section class="widget <?php if ($_smarty_tpl->tpl_vars['locked']->value) {?>locked<?php }?>" data-widgster-collapsed="<?php if ($_smarty_tpl->tpl_vars['collapsed']->value) {?>true<?php }?>" id="default-widget" data-widgster-load="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/html/<?php if ($_smarty_tpl->tpl_vars['xPHP']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['xPHP']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
" data-widgster-autoload="true">
 <?php if (!$_smarty_tpl->tpl_vars['header']->value) {?>
    <header>
        <h5><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h5>
        <div class="widget-controls">
            
            <a data-widgster="load" title="Reload" href="#"><i class="glyphicon glyphicon-refresh"></i></a>
            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
            <a data-widgster="fullscreen" title="Full Screen" href="#"><i class="glyphicon glyphicon-resize-full"></i></a>
            <a data-widgster="restore" title="Restore" href="#"><i class="glyphicon glyphicon-resize-small"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
            <a data-widgster="watchtower" title="Add to Watchtower" href="#"><i class="fa fa-eye"></i></a>
        </div>
    </header>
<?php }?>
    <div class="body"> 
    </div>
</section><?php }} ?>
