<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:38:35
         compiled from "x/html/layout/watchtower/frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166330991553c8a4cb24b923-79402994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de7e1040b9fe5baffbd97626678df0cefd985969' => 
    array (
      0 => 'x/html/layout/watchtower/frame.tpl',
      1 => 1405643017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166330991553c8a4cb24b923-79402994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HTML' => 0,
    'style' => 0,
    'attr' => 0,
    'suite' => 0,
    'toBackDoor' => 0,
    'admin_menu' => 0,
    'xtras' => 0,
    'xtra' => 0,
    'key' => 0,
    'children' => 0,
    'item' => 0,
    'ICON' => 0,
    'x' => 0,
    'SCRIPT' => 0,
    'TPL_EXISTS' => 0,
    'Xtra' => 0,
    'method' => 0,
    'php' => 0,
    'XTRA_METHOD' => 0,
    'PORTAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a4cb527095_94990387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a4cb527095_94990387')) {function content_53c8a4cb527095_94990387($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		
		<title>SuperDom Watchtower</title>
		
        <link href="/x/html/layout/watchtower/css/shopfrog.css" rel="stylesheet" media="screen">   
        <!-- <link href="/x/html/layout/watchtower/shopfrog-grey.css" rel="stylesheet" media="screen"> -->

        
		<link href="/x/html/layout/watchtower/css/application.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/bin/css/font-awesome.css">

	    <link rel="shortcut icon" href="img/favicon.png">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <meta charset="utf-8">

		
		<?php if ($_smarty_tpl->tpl_vars['HTML']->value['HEAD']['CSS']!='') {?>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['CSS'];?>
">
		<?php }?> 

		<?php if ($_smarty_tpl->tpl_vars['HTML']->value['HEAD']['JS']!='') {?>
		<!--
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['JS'];?>
"></SCRIPT>
		-->
		<?php }?> 

		<STYLE TYPE="text/css">
			
			/*<?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['style']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HTML']->value['HEAD']['STYLE']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['style']->value['element'];?>
<?php if ($_smarty_tpl->tpl_vars['style']->value['state']!=''&&$_smarty_tpl->tpl_vars['style']->value['state']!=" ") {?>:<?php echo $_smarty_tpl->tpl_vars['style']->value['state'];?>
<?php }?>{
				<?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['style']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value) {
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['attr']->value['key'];?>
 : <?php echo $_smarty_tpl->tpl_vars['attr']->value['value'];?>
;
				<?php } ?>
			}
			<?php } ?>*/

			 body{
				background : rgb(109,179,242); /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background : url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzZkYjNmMiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjE5JSIgc3RvcC1jb2xvcj0iIzU0YTNlZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjYwJSIgc3RvcC1jb2xvcj0iIzM2OTBmMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxZTY5ZGUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background : -moz-linear-gradient(left,  rgba(109,179,242,1) 0%, rgba(84,163,238,1) 19%, rgba(54,144,240,1) 60%, rgba(30,105,222,1) 100%); /* FF3.6+ */
				background : -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(109,179,242,1)), color-stop(19%,rgba(84,163,238,1)), color-stop(60%,rgba(54,144,240,1)), color-stop(100%,rgba(30,105,222,1))); /* Chrome,Safari4+ */
				background : -webkit-linear-gradient(left,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* Chrome10+,Safari5.1+ */
				background : -o-linear-gradient(left,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* Opera 11.10+ */
				background : -ms-linear-gradient(left,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* IE10+ */
				background : linear-gradient(to right,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 19%,rgba(54,144,240,1) 60%,rgba(30,105,222,1) 100%); /* W3C */
				filter     : progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=1 ); /* IE6-8 */ 
			}

            body{
                background: url(/bin/images/bgs/full/<?php echo $_smarty_tpl->tpl_vars['suite']->value;?>
.png) center center fixed !important;
            }

			.transparent-black-25{
				background-color: rgba(0,0,0,0.25);
			}
			.transparent-black-50{
				background-color: rgba(0,0,0,0.55);
			}
			.transparent-black-75{
				background-color: rgba(0,0,0,0.75);
			}
			.transparent-black-90{
				background-color: rgba(0,0,0,0.90);
			} 
			</STYLE>
			<link href='http://fonts.googleapis.com/css?family=Geo|Righteous|Allerta' rel='stylesheet' type='text/css'>
	    
</head>
<body class="background-dark">
<div class="logo text-center">
    <h4>
        
        
        <a href="/" class="">
            <i class="fa fa-globe"></i> 
        </a> 
        <br/>
       <!--  <span class="label label-warning">  
         <strong>x</strong></span> -->
        <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
">
            <strong>Super</strong><span>Dom</span>
           
        </a>  <br/>
        
          
        <btn class="btn btn-sm label dropdown label-success dropdown  ">  

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_smarty_tpl->tpl_vars['suite']->value;?>
  <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul></span> <span class="label label-danger">  
        &alpha; </btn>
      <!--   <span class="label   label-info ">  
           infused </span>  -->
            
      
    </h4>  
</div>
<nav id="sidebar" class="sidebar nav-collapse collapse">
    <ul id="side-nav" class="side-nav">
        <li class="active">
            <a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
"><i class="fa fa-eye"></i> <span class="name">Watchtower</span>  </a>
        </li>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
            <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>

                <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['xtra']->value['see']&&($_smarty_tpl->tpl_vars['xtra']->value['alpha']==true||$_smarty_tpl->tpl_vars['xtra']->value['beta']==true||$_smarty_tpl->tpl_vars['xtra']->value['delta']==true||$_smarty_tpl->tpl_vars['xtra']->value['omega']==true)) {?>
                    <?php $_smarty_tpl->tpl_vars['children'] = new Smarty_variable(1, null, 0);?>
                <?php }?>
            <?php } ?>

            <?php if ($_smarty_tpl->tpl_vars['key']->value&&$_smarty_tpl->tpl_vars['children']->value>0) {?> 

                 <li class="panel">
                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                       data-parent="#side-nav" href="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-collapse"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"></i><span class="name"><?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value['area']);?>
</span></a>
                    <ul id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
-collapse" class="panel-collapse collapse"> 
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

                                <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']||$_smarty_tpl->tpl_vars['xtra']->value['beta']||$_smarty_tpl->tpl_vars['xtra']->value['delta']||$_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>
                                    <li> 
                                        <a href="/x/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
"  data-placement="top" data-original-title="<?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>
">
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
                                        <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
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

    <div id="sidebar-settings" class="settings">
        <button type="button"
                data-value="icons"
                class="btn-icons btn btn-transparent btn-sm"><i class="fa fa-toggle-left fa-1x"></i></button>
        <button type="button"
                data-value="auto"
                class="btn-auto btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
    </div> 
        <li class="visible-xs">
            <a href="login.html"><i class="fa fa-sign-out"></i> <span class="name">Sign Out</span></a>
        </li>
    </ul>
</nav>
<div class="wrap">
    <header class="page-header">
        <div class="navbar"> 
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="visible-phone-landscape">
                        <a href="#" id="search-toggle">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>



                    <li class="dropdown">
                        <a href="#" title="Messages" id="messages"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-comments"></i>
                        </a>
                        <ul id="messages-menu" class="dropdown-menu messages" role="menu">
                            <li role="presentation">
                                <a href="#" class="message">
                                    
                                    <div class="details">
                                        <div class="sender">Jane Hew</div>
                                        <div class="text">
                                            Hey, John! How is it going? ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                     
                                    <div class="details">
                                        <div class="sender">Alies Rumiancaŭ</div>
                                        <div class="text">
                                            I'll definitely buy this template
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="message">
                                     
                                    <div class="details">
                                        <div class="sender">Michał Rumiancaŭ</div>
                                        <div class="text">
                                            Is it really Lore ipsum? Lore ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all messages <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" title="8 support tickets"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-group"></i>
                            <span class="count">8</span>
                        </a>
                        <ul id="support-menu" class="dropdown-menu support" role="menu">
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-bell-o"></i></span>
                                    </div>
                                    <div class="details">
                                        Check out this awesome ticket
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-warning"><i class="fa fa-question-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        "What is the best way to get ...
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-success"><i class="fa fa-tag"></i></span>
                                    </div>
                                    <div class="details">
                                        This is just a simple notification
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-info"><i class="fa fa-info-circle"></i></span>
                                    </div>
                                    <div class="details">
                                        12 new orders has arrived today
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="support-ticket">
                                    <div class="picture">
                                        <span class="label label-important"><i class="fa fa-plus"></i></span>
                                    </div>
                                    <div class="details">
                                        One more thing that just happened
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="text-align-center see-all">
                                    See all tickets <i class="fa fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li class="hidden-xs">
                        <a href="#" id="settings"
                           title="Settings"
                           data-toggle="popover"
                           data-placement="bottom">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
                    <li class="hidden-xs dropdown">
                        <a href="#" title="Account" id="account"
                           class="dropdown-toggle"
                           data-toggle="dropdown">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul id="account-menu" class="dropdown-menu account" role="menu">
                            <li role="presentation" class="account-picture">
                                <!-- <img src="img/2.jpg" alt=""> -->
                                Philip Daineka
                            </li>
                            <li role="presentation">
                                <a href="form_account.html" class="link">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="component_calendar.html" class="link">
                                    <i class="fa fa-calendar"></i>
                                    Calendar
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#" class="link">
                                    <i class="fa fa-inbox"></i>
                                    Inbox
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="visible-xs">
                        <a href="#"
                           class="btn-navbar"
                           data-toggle="collapse"
                           data-target=".sidebar"
                           title="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="hidden-xs"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/login/logout"><i class="fa fa-sign-out"></i></a></li>
                </ul>
                <form id="search-form" class="navbar-form pull-right" role="search">
                    <input type="search" class="search-query" placeholder="Search...">
                </form>
                <div class="notifications pull-right">

                    <div class="alert-info alert pull-right">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle"></i> Adjust the Layout using the <a id="notification-link" href="#">settings</a> on the right!
                    </div>
                </div>
        </div>

    </header>
     
    <div class="loader-wrap hiding hide">
        <i class="fa fa-spinner fa-spin fa-5x"></i>
    </div>

<!-- jquery and friends -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery/jquery-2.0.3.min.js"> </script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-pjax/jquery.pjax.js"></script>


<!-- jquery plugins -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/icheck.js/jquery.icheck.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/sparkline/jquery.sparkline.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.slimscroll.js"></script>


<!-- jquery plugins -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-maskedinput/jquery.maskedinput.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/parsley/parsley.js"> </script> 
<script type="text/javascript" src="/x/html/layout/watchtower/lib/select2.js"></script>

<!-- d3, nvd3-->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/lib/d3.v2.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/nv.d3.custom.js"></script>

<!-- nvd3 models -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/scatter.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/axis.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/legend.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBar.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/multiBarChart.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/line.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/src/models/lineChart.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/nvd3/stream_layers.js"></script>

<!--backbone and friends -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/underscore-min.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/backbone-min.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/backbone/backbone.localStorage-min.js"></script>

<!-- bootstrap default plugins -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/transition.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/collapse.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/alert.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tooltip.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/popover.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/button.js"></script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/tab.js"> </script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/dropdown.js"></script>

<script type="text/javascript" src="/x/html/layout/watchtower/lib/bootstrap/carousel.js"></script>
 
<!-- page specific -->
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery-ui-1.10.3.custom.js"> </script>
<script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.ui.touch-punch.js"> </script>

<script type="text/template" id="message-template">
        <div class="sender pull-left">
            <div class="icon">
                <img src="img/2.jpg" class="img-circle" alt="">
            </div>
            <div class="time">
                just now
            </div>
        </div>
        <div class="chat-message-body">
            <span class="arrow"></span>
            <div class="sender">Tikhon Laninga</div>
            <div class="text">
                <<?php ?>%- text %<?php ?>>
            </div>
        </div>
</script>

<script type="text/template" id="settings-template">
    <div class="setting clearfix">
        <div>Background</div>
        <div id="background-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <<?php ?>% dark = background == 'dark'; light = background == 'light';%<?php ?>>
            <button type="button" data-value="dark" class="btn btn-sm btn-transparent <<?php ?>%= dark? 'active' : '' %<?php ?>>">Dark</button>
            <button type="button" data-value="light" class="btn btn-sm btn-transparent <<?php ?>%= light? 'active' : '' %<?php ?>>">Light</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar on the</div>
        <div id="sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <<?php ?>% onRight = sidebar == 'right'%<?php ?>>
            <button type="button" data-value="left" class="btn btn-sm btn-transparent <<?php ?>%= onRight? '' : 'active' %<?php ?>>">Left</button>
            <button type="button" data-value="right" class="btn btn-sm btn-transparent <<?php ?>%= onRight? 'active' : '' %<?php ?>>">Right</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>Sidebar</div>
        <div id="display-sidebar-toggle" class="pull-left btn-group" data-toggle="buttons-radio">
            <<?php ?>% display = displaySidebar%<?php ?>>
            <button type="button" data-value="true" class="btn btn-sm btn-transparent <<?php ?>%= display? 'active' : '' %<?php ?>>">Show</button>
            <button type="button" data-value="false" class="btn btn-sm btn-transparent <<?php ?>%= display? '' : 'active' %<?php ?>>">Hide</button>
        </div>
    </div>
    <div class="setting clearfix">
        <div>White Version</div>
        <div>
            <a href="white/" class="btn btn-sm btn-transparent">&nbsp; Switch &nbsp;   <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</script>

<script type="text/template" id="sidebar-settings-template">
    <<?php ?>% auto = sidebarState == 'auto'%<?php ?>>
    <<?php ?>% if (auto) { %<?php ?>>
    <button type="button"
            data-value="icons"
            class="btn-icons btn btn-transparent btn-sm"><i class="fa fa-toggle-left fa-1x"></i></button>
    <button type="button"
            data-value="auto"
            class="btn-auto btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
    <<?php ?>%} else { %<?php ?>>
    <button type="button"
            data-value="auto"
            class="btn btn-transparent btn-sm"><i class="fa fa-toggle-right fa-1x"></i></button>
    <<?php ?>% } %<?php ?>>
</script>


	<?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['CSS']!='') {?>
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['CSS'];?>
"> -->
	<?php }?>
		
	<?php if ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS']!='') {?>
		<!-- script src="<?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['JS'];?>
"></script -->
	<?php }?>  

  
    <?php $_smarty_tpl->tpl_vars['SCRIPT'] = new Smarty_variable($_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['Door']->value)."/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

    <?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value;?>

 

    <!-- page specific -->


    <!-- basic application js


    <script type="text/javascript" src="/bin/js/ext-4.2.1/examples/shared/include-ext.js"></script>
	<script type="text/javascript" src="/fileServer/js/x4/x4.js"></script>
	<script type="text/javascript" src="/fileServer/js/x4/ume.js"></script>

-->

    <script type="text/javascript" src="/x/html/layout/watchtower/lib/jquery.nestable.js"> </script>

    <div class="content container" id="container" data-pjax-container>
        <?php $_smarty_tpl->tpl_vars["WT"] = new Smarty_variable("/x/html/layout/watchtower/", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['TPL_EXISTS']->value&&$_smarty_tpl->tpl_vars['Xtra']->value!=''&&$_smarty_tpl->tpl_vars['method']->value!=''&&($_smarty_tpl->tpl_vars['Xtra']->value!='index')) {?>
       
            <?php if ($_smarty_tpl->tpl_vars['Xtra']->value!='login') {?>     
                <?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["php"] = new Smarty_variable("x".$_tmp1.".php", null, 0);?>
                <head><title><?php echo $_smarty_tpl->tpl_vars['xtras']->value[$_smarty_tpl->tpl_vars['php']->value]['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['xtras']->value[$_smarty_tpl->tpl_vars['php']->value]['desc'];?>
 | Super Dom</title></head>
               

                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-title"><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>

                         <?php if ($_smarty_tpl->tpl_vars['method']->value=='index') {?>
                             <small>
                            <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?> 
                                <?php if ($_smarty_tpl->tpl_vars['Xtra']->value==$_smarty_tpl->tpl_vars['xtra']->value['link']) {?>
                                     <?php echo $_smarty_tpl->tpl_vars['xtra']->value['desc'];?>

                                <?php }?>
                            <?php } ?>
                            </small>
                        <?php } else { ?>
                            / <?php echo ucfirst($_smarty_tpl->tpl_vars['method']->value);?>

                        <?php }?>
                        </h2>
                    </div>
                </div>
                
                <div class="row"> 
                    <div class="col-md-12 widget-container "> 
                        <section class="widget locked">
                            <ol class="breadcrumb">
                                <li><a href="/"><i class="fa fa-globe"></i> Home</a></li>
                                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
"><i class="fa fa-dashboard"></i> SuperDom</a></li>
                                <?php  $_smarty_tpl->tpl_vars['xtra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xtra']->_loop = false;
 $_smarty_tpl->tpl_vars['x'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['xtras']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xtra']->key => $_smarty_tpl->tpl_vars['xtra']->value) {
$_smarty_tpl->tpl_vars['xtra']->_loop = true;
 $_smarty_tpl->tpl_vars['x']->value = $_smarty_tpl->tpl_vars['xtra']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['xtra']->value['icon']&&$_smarty_tpl->tpl_vars['Xtra']->value==$_smarty_tpl->tpl_vars['xtra']->value['link']) {?>
                                        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['see'];?>
"></i>
                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['xtra']->value['see']);?>
</a> 
                                        </li>
                                        <li class="active"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['xtra']->value['link'];?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['xtra']->value['mini'];?>
"></i>
                                        <?php echo $_smarty_tpl->tpl_vars['xtra']->value['name'];?>
 

                                        <?php if ($_smarty_tpl->tpl_vars['method']->value=='index') {?>

                                        <span class="text-right label <?php if ($_smarty_tpl->tpl_vars['xtra']->value['alpha']) {?>label-danger<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['beta']) {?>label-warning<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['delta']) {?>label-success<?php } elseif ($_smarty_tpl->tpl_vars['xtra']->value['omega']) {?>label-primary<?php } else { ?>label-default<?php }?>"><?php echo $_smarty_tpl->tpl_vars['xtra']->value['version'];?>
</span></a>
                                        </li>
                                        <?php } else { ?>
                                            <li class="active"><a href="/<?php echo $_smarty_tpl->tpl_vars['toBackDoor']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['Xtra']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['method']->value;?>
"> <?php echo ucfirst($_smarty_tpl->tpl_vars['method']->value);?>
</i></a>
                                        <?php }?>

                                    <?php }?>
                                <?php } ?>
                            </ol>
                        </section>  
                    </div>
                </div>
            <?php }?>

            <?php ob_start();?><?php echo ucfirst($_smarty_tpl->tpl_vars['Xtra']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['XTRA_METHOD'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../../".((string)$_smarty_tpl->tpl_vars['suite']->value)."/x".$_tmp2."/".((string)$_smarty_tpl->tpl_vars['method']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>
    
            <?php $_smarty_tpl->createLocalArrayVariable('HTML', null, 0);
$_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'] = $_smarty_tpl->tpl_vars['XTRA_METHOD']->value;?>

        <?php } elseif ($_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML']=='') {?>

            <?php $_smarty_tpl->tpl_vars['PORTAL'] = new Smarty_variable($_smarty_tpl->getSubTemplate ("../../".((string)$_smarty_tpl->tpl_vars['Door']->value)."/portal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0));?>

            <?php $_smarty_tpl->createLocalArrayVariable('HTML', null, 0);
$_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'] = $_smarty_tpl->tpl_vars['PORTAL']->value;?>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['HTML']->value['BODY']['HTML'];?>


    </div>

</body>
</html><?php }} ?>
