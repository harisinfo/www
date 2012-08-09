<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:45
         compiled from "C:\wamp\www\html\templates\login-box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238324f428471ba06d1-29789690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '098ef892dcc0ac76d59e2fe8b8f106bef736fb08' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\login-box.tpl',
      1 => 1319370420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238324f428471ba06d1-29789690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_response' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f428471c4dc5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428471c4dc5')) {function content_4f428471c4dc5($_smarty_tpl) {?><div id="login-box">
<?php if ($_smarty_tpl->tpl_vars['login_response']->value['login']=='success'){?>
<!--<div class="login-text">Not <?php echo $_smarty_tpl->tpl_vars['login_response']->value['first_name'];?>
</div>-->
<div class="clear-height"></div>
<div class="login-text">My Menu</div>
<?php if ($_smarty_tpl->tpl_vars['login_response']->value['user_type']=='USER'){?>
<div class="login-text"><a href="/view-my-hairstyles.php">View my hair styles</a></div>
<div class="login-text">
<a rel="gb_page_center[380, 240]" title="Upload new picture for - <?php echo $_smarty_tpl->tpl_vars['login_response']->value['first_name'];?>
" href="manage-upload-hairstyle.php">
Upload pictures
</a>
</div>
<div class="login-text"><a href="/login.php?action=logout">Logout</a></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['login_response']->value['user_type']=='SALOON'){?>
<div class="login-text"><a href="/manage-profile.php">Manage Profile</a></div>
<div class="login-text"><a href="/manage-images.php">Manage Images</a></div>
<!--<div class="login-text"><a href="/manage-contacts.php">Update Contacts</a></div>-->
<div class="login-text"><a href="/manage-my-employees.php">Manage my employees</a></div>
<div class="login-text">&nbsp;</div>
<div class="login-text"><a href="/manage-price-list.php">Update Price List</a></div>
<div class="login-text"><a href="/manage-opening-hours.php">Update Opening Hours</a></div>
<div class="login-text"><a href="/manage-free-hair-cuts.php">Update Free Hair Cuts</a></div>
<div class="login-text"><a href="/manage-special-offers.php">Update Special Offers</a></div>
<div class="login-text"><a href="/manage-courses-training.php">Manage Courses / Training</a></div>
<div class="login-text"><a href="/manage-vacancies.php">Manage Vacancies</a></div>
<div class="login-text"><a href="/manage-my-advises.php">Manage Advises</a></div>
<div class="login-text"><a href="/login.php?action=logout">Logout</a></div>
<?php }?>
<?php }else{ ?>
<form name="logmein" id="logmein" action="login.php" method="POST">
<div class="login-text">email</div>
<div id="username"><input type="text" size="15" name="user_email" class="text-field" /></div>

<div class="clear-height"></div>

<div class="login-text">password</div>
<div id="password"><input type="password" size="15" name="password" class="text-field" /></div>

<div class="login-text">user type</div>
<div id="user-type">
<select name="user_type" class="user-type">
<option value="USER">user</option>
<option value="SALOON">saloon / mobile hairdresser</option>
</select>
</div>
<div class="clear-height"></div>
<div class="submit-button">
<div id="form-submit"><input type="submit" name="log_in" value="log in!" class="formsubmit"></div>
</div>
</form>

<div class="login-text">
<a rel="gb_page_center[700, 560]" title="Register" href="/register.php">register here</a>
</div>

<div class="login-text">
<a rel="gb_page_center[320, 320]" title="Forgot Password" href="/forgotpassword.php">forgotten your details?</a>
</div>

<div class="clear-both height1 width1 overflow-hidden"></div>
<?php }?>
</div><?php }} ?>