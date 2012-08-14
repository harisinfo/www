<?php /* Smarty version Smarty 3.1.0, created on 2012-08-14 16:29:50
         compiled from "C:\wamp\www\html\Themes\V1.0\html_helpers\yes_more_details_no.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28870502a6cf450e651-70723645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618a9eb13f2eedd198a29f83cb7befc9ee7efc1d' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\html_helpers\\yes_more_details_no.tpl',
      1 => 1344961717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28870502a6cf450e651-70723645',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_502a6cf45d440',
  'variables' => 
  array (
    'key' => 0,
    'response' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502a6cf45d440')) {function content_502a6cf45d440($_smarty_tpl) {?><!-- Question -->
<div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]==true){?>error<?php }?><?php }?>">

<div id="question_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<?php echo $_smarty_tpl->tpl_vars['response']->value['question_text_default'][$_smarty_tpl->tpl_vars['key']->value];?>

</div>

<!-- Answer options -->
<div id="options_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<input type="radio" id="answer_1_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="answer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['response']->value['question_default_selection'][$_smarty_tpl->tpl_vars['key']->value]=='YES'){?> checked<?php }?> />Yes<br />
<input type="radio" id="answer_0_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="answer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="0"<?php if ($_smarty_tpl->tpl_vars['response']->value['question_default_selection'][$_smarty_tpl->tpl_vars['key']->value]=='NO'){?> checked<?php }?> />No
</div>

<!-- More info yes -->
<div id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<textarea name="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class=""><?php if ($_smarty_tpl->tpl_vars['response']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value]){?><?php echo $_smarty_tpl->tpl_vars['response']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?></textarea>
</div>

</div>

<div class="clear-height"></div><?php }} ?>