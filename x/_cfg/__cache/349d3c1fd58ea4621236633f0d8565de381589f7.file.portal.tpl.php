<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:51:36
         compiled from "/home/xopher/git/superdom/x/html/watchtower/portal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9182064453c8a7d82a1b29-62146277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349d3c1fd58ea4621236633f0d8565de381589f7' => 
    array (
      0 => '/home/xopher/git/superdom/x/html/watchtower/portal.tpl',
      1 => 1405643017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9182064453c8a7d82a1b29-62146277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toBackDoor' => 0,
    'admin_menu' => 0,
    'key' => 0,
    'item' => 0,
    'xtras' => 0,
    'xtra' => 0,
    'ICON' => 0,
    'x' => 0,
    'WWW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a7d83a7bd2_29797600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a7d83a7bd2_29797600')) {function content_53c8a7d83a7bd2_29797600($_smarty_tpl) {?><div class="row"> 
    <div class="col-md-9 widget-container ">  
        <section class="widget locked">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron handle">
                <div class="container">
                    <div class="widget-controls" data-widgster="restore">
                        <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-plus"></i></a>
                        <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-minus"></i></a>
                        <a data-widgster="load" title="I am spinning!" href="#"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
                    </div>
                    <div id="carousel-example-generic" class="carousel slide">
                        <ol class="carousel-indicators outer">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="8"></li>

                            <li data-target="#carousel-example-generic" data-slide-to="9"></li>
                            <!-- <li data-target="#carousel-example-generic" data-slide-to="10"></li> -->
                            <!-- <li data-target="#carousel-example-generic" data-slide-to="11"></li> -->
                        </ol>
                        <div class="carousel-inner text-align-center">
                            <div class="item active">
                                <h1><i class="fa fa-cloud"></i><br/>Castle on a Cloud</h1>
                                <p class="lead">
                                    Sit back, Relax! Visit the room full of <em>toys</em>...
                                </p>
                                <p class="text-align-center">
                                    <!-- <a class="btn btn-success btn-lg " data-widgster="fullscreen"> -->
                                    <a class="btn btn-success btn-lg " href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/blox">
                                        Go Fool around in the Toy <em>Blox</em> <i class="fa fa-cube"></i> 
                                    </a>
                                    <a class="btn btn-info btn-lg " data-widgster="restore">
                                        Watchtower
                                    </a>
                                </p>
                            </div>

                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['key']->value) {?> 
                                    <div class="item">
                                        <h1><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i><br/><?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
</h1>
                                        <p class="lead">
                                            <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['desc']);?>
 
                                        </p> 
                                        <p class="text-align-center">
                                            <div class="btn-group">
                                                 
                                             <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                                                    <!-- <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];?>
<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" desc="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" link="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" file="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" icon="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
">  -->
                                                    
                                                    <a  href="/x/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" class="btn btn-lg <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>btn-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>btn-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>btn-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>btn-primary<?php } else { ?>btn-default" disabled="disabled<?php }?>" > 

                                                       
                                                        
                                                        <i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 
                                                    </a>
                                                <?php }?>
                                            <?php } ?>
                                            
                                            </div>
                                              
                                        </p>
                                    </div>
                                   

                                   <!--  <div align="center" id="map-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" area="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="overflow: hidden"> 
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['A'];?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.png"  id="area-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" height="128" width="128" >
                                        <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];?>
<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" desc="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" link="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" file="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" icon="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
"> 
                                            <?php }?>
                                        <?php } ?>
                                        <p><?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
</p>
                                        <span class="transparent-black-25" style="display: none; height: 48px; padding : 5px;">
                                            <img align="absmiddle" style="margin: 5px;" />
                                            <h1 style="float: left; margin-left: 60px;"></h1>
                                            <h3 style=" "></h3>
                                        </span> 
                                    </div>   -->
                                <?php }?>
                            <?php } ?>

                           <!--  <div class="item">
                                <h1>The SuperDom neXus</h1>
                                <p class="lead">
                                    Or as we like to call it... <em>SuperDomX</em>! 
                                </p> 
                                <p class="text-align-center">
                                    <a class="btn btn-info btn-lg ">
                                       Connect to the <em>neXus</em>! &nbsp;
                                        <i class="fa fa-globe"></i>
                                    </a>
                                </p>
                            </div>
                            <div class="item">
                                <h1>Blox & Costumez</h1>
                                <p class="lead">
                                    Check our the plethora of contributions from other <em>Users</em>! 
                                </p> 
                                <p class="text-align-center">
                                    <a class="btn btn-danger btn-lg ">
                                       Get More <em>Pieces</em>! &nbsp;
                                        <i class="fa fa-puzzle-piece"></i>
                                    </a>
                                </p>
                            </div>
                        </div> -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>


                    <!-- <span class="label label-default">Key: </span>
                    <span class="label label-danger">&alpha;</span>
                    <span class="label label-warning">&beta;</span>
                    <span class="label label-success">&Delta;</span>
                    <span class="label label-primary">&Omega;</span>
 -->
                    <div class="col-md-6" data-widgster="restore"> 
                        <header> 
                            <h4>Welcome to SuperDom <span class="label label-success">&Delta;</span> <small>Your Domain is Now Super!</small></h4> 
                        </header>
                        <div class="body">
                            <p>
                                <i class="fa fa-quote-right fa-3x pull-right fa-border"></i>
                                <blockquote>I hope you feel right at home among your new Super Domain. <strong>Super Dom</strong> was made with everyone in mind. Please take a moment to browse around and get well aquainted. 

                                    SuperDom was built to be:
                                    <ul class="text-list fa-ul">
                                        <li><i class="fa fa-li">&#9822;</i> <strong>Simple</strong></li>
                                        <li><i class="fa fa-li">&#9821;</i> <strong>Clean</strong> </li>
                                        <li><i class="fa fa-li">&#9820;</i> <strong>Fast</strong> </li>
                                        <li><i class="fa fa-li">&#9819;</i> <strong>Elegant</strong>
                                        </li>
                                        <li><i class="fa fa-li">&#9818;</i> <strong>King</strong>
                                        </li>
                                    </ul>

                                </blockquote>
                            </p>
                            
                             
                        </div>
                    </div>



                    <div class="col-md-6" data-widgster="restore"> 
                        <ol class="breadcrumb">
                            <li><a href=""><i class="fa fa-home"></i> <?php echo $_smarty_tpl->tpl_vars['WWW']->value;?>
</a></li>
                            <li><a href=""><i class="fa fa-dashboard"></i> SuperDom</a></li>
                            <li class="active"><i class="fa fa-eye"></i> Watchtower </li>
                        </ol>  
                        <ul class="text-list fa-ul">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['key']->value) {?> 

                                     <li><i class="fa fa-li fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i>
                                        <span class="name"><?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
</span>
                                        <ul > 
                                            <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                                                     

                                                    <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']||$_smarty_tpl->tpl_vars['xtra']->value['beta']||$_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>
                                                        <li> 
                                                            <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>
                                                                <span class="label label-danger">&alpha;</span>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>
                                                                <span class="label label-warning">&beta;</span>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>
                                                                <span class="label label-success">&Delta;</span>
                                                            <?php }?>
                                                            <?php if ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>
                                                                <span class="label label-primary">&Omega;</span>
                                                            <?php }?>
                                                            <a href="/x/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"><?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>

                                                           
                                                            </a>

                                                        </li>
                                                    <?php }?>
                                                <?php }?>
                                            <?php } ?>
                                        </ul>
                                    </li>

                                   <!--  <div align="center" id="map-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" area="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="overflow: hidden"> 
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['A'];?>
<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.png"  id="area-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" height="128" width="128" >
                                        <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']) {?>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['ICON']->value[48];?>
<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" desc="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
" link="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" file="<?php echo $_smarty_tpl->tpl_vars['x']->value;?>
" icon="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['icon'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
"> 
                                            <?php }?>
                                        <?php } ?>
                                        <p><?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
</p>
                                        <span class="transparent-black-25" style="display: none; height: 48px; padding : 5px;">
                                            <img align="absmiddle" style="margin: 5px;" />
                                            <h1 style="float: left; margin-left: 60px;"></h1>
                                            <h3 style=" "></h3>
                                        </span> 
                                    </div>   -->
                                <?php }?>
                            <?php } ?>
                        </ul>


                        
                    </div>
                </div>
            </div>
        </section>

        <!--
        <?php echo $_smarty_tpl->getSubTemplate ("~widgets/jig.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Watchtower Feed",'Xtra'=>"wwwSetup",'method'=>"watchtowerFeed",'locked'=>true,'collapsed'=>true), 0);?>

        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">Watchtower <span class="label label-success">v.1</span> <small>View your Whole Domain from the Top Down.</small></h2>
            </div>
        </div>
        -->
         
    </div>
<div class="col-md-3  widget-container ">
    <?php echo $_smarty_tpl->getSubTemplate ("~widgets/top_x_shortcuts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
</div> 
</div>

    
    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"> </script>
    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.ui.touch-punch.js"> </script>
   <!-- page specific -->
    <script type="text/javascript" src="/x/html/layout/watchtower/js/index.js"></script>
 
    <script type="text/javascript" src="/x/html/layout/watchtower/js/grid-live.js"> </script>
 <?php }} ?>
