<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:45
         compiled from "C:\wamp\www\html\templates\search-box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129964f428471ed6239-39216878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92acbd26ca2f5b1b88652786750e904c5be8b6a' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\search-box.tpl',
      1 => 1318543200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129964f428471ed6239-39216878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f428472030a4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428472030a4')) {function content_4f428472030a4($_smarty_tpl) {?><form name="search" id="search" action="saloon-search.php" method="POST">
<input type="hidden" id="hidden" value="" />
<div class="login-text" style="margin-top:5px;font-weight: bold;">Search Saloons</div>
<div class="login-text">City</div>
<div id="user-type">
<input type="text" name="city" id="city" class="text-field" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['search']['city'];?>
" />
</div>

<div class="login-text">Hairdresser Type</div>
<div id="saloon-type">
<select name="saloon_type" class="saloon-type">
<option value="NORMAL"<?php if ($_smarty_tpl->tpl_vars['request']->value['search']['saloon_type']=='NORMAL'){?> selected<?php }?>>Saloon</option>
<option value="MOBILE"<?php if ($_smarty_tpl->tpl_vars['request']->value['search']['saloon_type']=='MOBILE'){?> selected<?php }?>>Mobile Hairdresser</option>
</select>
</div>

<div class="login-text">Postcode</div>
<div id="postcode"><input type="text" size="15" name="postcode" class="text-field" value="<?php echo $_smarty_tpl->tpl_vars['request']->value['search']['postcode'];?>
" /></div>

<div class="login-text">Free Haircuts: <input type="checkbox" name="free_hair_cuts" value="1" style="margin-left: 45px;"<?php if ($_smarty_tpl->tpl_vars['request']->value['search']['free_hair_cuts']==1){?> checked<?php }?> /></div>
<div class="clear-height"></div>
<div class="login-text">Special Offers: <input type="checkbox" name="special_offer" value="1" style="margin-left: 44px;"<?php if ($_smarty_tpl->tpl_vars['request']->value['search']['special_offer']==1){?> checked<?php }?> /></div>
<div class="clear-height"></div>
<div class="login-text">Courses / Training: <input type="checkbox" name="courses_training" value="1" style="margin-left: 16px;"<?php if ($_smarty_tpl->tpl_vars['request']->value['search']['courses_training']==1){?> checked<?php }?> /></div>
<div class="clear-height"></div>
<div class="login-text">Vacancies: <input type="checkbox" name="vacancies" value="1" style="margin-left: 68px;"<?php if ($_smarty_tpl->tpl_vars['request']->value['search']['vacancies']==1){?> checked<?php }?> /></div>

<div class="clear-height"></div>
<div class="submit-button">
<div id="form-submit"><input type="submit" name="submit" value="search" class="formsubmit"></div>
</div>
</form><?php }} ?>