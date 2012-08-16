<?php /* Smarty version Smarty 3.1.0, created on 2012-08-16 08:33:11
         compiled from "C:\wamp\www\html\Themes\V1.0\html_helpers\dd_mm_yyyy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22085502bca0ce46d75-49191911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa1943c9a0f216227b7ec4582dce8f956225506' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\html_helpers\\dd_mm_yyyy.tpl',
      1 => 1345105988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22085502bca0ce46d75-49191911',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_502bca0cefc68',
  'variables' => 
  array (
    'key' => 0,
    'response' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502bca0cefc68')) {function content_502bca0cefc68($_smarty_tpl) {?><!-- Question -->
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