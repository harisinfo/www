<?php /* Smarty version Smarty 3.1.0, created on 2012-02-28 15:33:57
         compiled from "C:\wamp\www\html\templates\html_helpers\yes_no_more_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203934f4291ab259f58-73415877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3eb5e716a00bc42db9bdf44c4b63566a8ea89c8' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\html_helpers\\yes_no_more_details.tpl',
      1 => 1330443144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203934f4291ab259f58-73415877',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f4291ab2aaf9',
  'variables' => 
  array (
    'key' => 0,
    'condition_related_questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f4291ab2aaf9')) {function content_4f4291ab2aaf9($_smarty_tpl) {?><!-- Question -->
<div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]==true){?>error<?php }?><?php }?>">

<div id="question_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<?php echo $_smarty_tpl->tpl_vars['condition_related_questions']->value['question_text_default'][$_smarty_tpl->tpl_vars['key']->value];?>

</div>

<!-- Answer options -->
<div id="options_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<input type="radio" id="answer_1_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="answer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="1"<?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_default_selection'][$_smarty_tpl->tpl_vars['key']->value]=='YES'){?> checked<?php }?> />Yes<br />
<input type="radio" id="answer_0_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="answer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="0"<?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_default_selection'][$_smarty_tpl->tpl_vars['key']->value]=='NO'){?> checked<?php }?> />No
</div>

<!-- More info yes -->
<div id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<textarea name="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class=""><?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value]){?><?php echo $_smarty_tpl->tpl_vars['condition_related_questions']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?></textarea>
</div>

</div>

<div class="clear-height"></div><?php }} ?>