<?php /* Smarty version Smarty 3.1.0, created on 2012-08-19 13:00:12
         compiled from "/Users/Hari/Desktop/www/html/Themes/V1.0/html_helpers/dd_mm_yyyy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20285437675030d54ca7aa11-95206157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd665e39abbd6733bfb23226584bf3b8537e5bb63' => 
    array (
      0 => '/Users/Hari/Desktop/www/html/Themes/V1.0/html_helpers/dd_mm_yyyy.tpl',
      1 => 1345156359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20285437675030d54ca7aa11-95206157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
    'response' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_5030d54cb1d03',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5030d54cb1d03')) {function content_5030d54cb1d03($_smarty_tpl) {?><!-- Question -->
<div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]==true){?>error<?php }?><?php }?>">

<div id="question_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<?php echo $_smarty_tpl->tpl_vars['response']->value['question_text_default'][$_smarty_tpl->tpl_vars['key']->value];?>

</div>

<!-- Answer options -->
<!--<div id="options_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<input type="text" name="answer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="answer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="" />
</div>-->

<div id="options_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">

<select name="answer_dd_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="answer_0_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<option value="01">01</option>
</select>
/
<select name="answer_mm_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="answer_0_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<option value="01">01</option>
</select>
/
<select name="answer_yyyy_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="answer_0_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<option value="2009">2009</option>
</select>

</div>



</div>

<div class="clear-height"></div><?php }} ?>