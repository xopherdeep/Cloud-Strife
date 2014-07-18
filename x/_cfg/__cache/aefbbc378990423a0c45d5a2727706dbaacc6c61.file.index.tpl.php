<?php /* Smarty version Smarty-3.1.19-dev, created on 2014-07-18 06:41:56
         compiled from "/home/xopher/git/superdom/x/Oxygen/xLogin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21014701253c8a594360423-64743227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aefbbc378990423a0c45d5a2727706dbaacc6c61' => 
    array (
      0 => '/home/xopher/git/superdom/x/Oxygen/xLogin/index.tpl',
      1 => 1405657567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21014701253c8a594360423-64743227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUPER_ADMIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_53c8a59439f728_89645082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c8a59439f728_89645082')) {function content_53c8a59439f728_89645082($_smarty_tpl) {?><div class="single-widget-container">
    <section class="widget login-widget">
        <!-- <header class="text-align-center">
            <h4>Login to your account</h4>
        </header> -->
        <div class="body">
            <form id="box-login" class="no-margin"
                  action="/.json" method="POST" onsubmit="return window.login.submit(this);">
                <div class="form-group no-margin"> 

                    <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                        <input name="login[username]" id="login[username]" type="text" class="form-control input-transparent input-lg"
                               placeholder="Your Username">
                    </div>

                </div>

                <div class="form-group"> 

                    <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                        <input name="login[password]" id="login[password]" type="password" class="form-control input-transparent input-lg"
                               placeholder="Your Password">
                    </div>
 
                <?php if ($_smarty_tpl->tpl_vars['SUPER_ADMIN']->value===false) {?>
                 
                    <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-key"></i>
                            </span>
                        <input name="login[confirm]" id="login[confirm]" type="password" class="form-control input-transparent input-lg"
                               placeholder="Confirm">
                    </div>
 

                    <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                        <input name="login[email]" id="login[email]" type="email" class="form-control input-transparent input-lg"
                               placeholder="Your Email">
                    </div>
 
                <?php }?>

                </div>
                <div class="col-md-12 btn-group">  
                    <button type="submit" class="btn   btn-lg btn-success col-md-7">
                        <i class="fa fa-lock"></i>
                        <small>Unlock</small>
                    </button>
                     <button type="submit" class="btn   btn-lg btn-info col-md-5">
                        <i class="fa fa-question"></i>
                        <small>Forgot</small>
                    </button>
                </div>
            </form>
        </div>
        <script type="text/javascript">
        	window.login = {
        		submit : function (e) {
        			E = e;
        			// var postData = $(this).serializeArray();
		            // var formURL = $(this).attr("action");
		              //e.preventDefault();
					  dataString = $("#box-login").serialize();

					  $.ajax({
						type     : "POST",
						url      : $("#box-login").attr("action"),
						data     : dataString,
						dataType : "json",
					    success: function(data)
					    {
					      // Handle the server response (display errors if necessary)

					      $.pjax({ 
                            container : '.content',
                            fragment  : '.content',
                            timeout   : 5000,
                            url       : window.location.pathname+window.location.search+window.location.hash
					      });

					    }
					  });
		            return false;
        		}
        	};
        </script>
       <!--  <footer>
            <div class="facebook-login">
                <a href="index.html"><span><i class="fa fa-facebook-square fa-lg"></i> LogIn with Facebook</span></a>
            </div>
        </footer> -->
    </section>
</div><?php }} ?>
