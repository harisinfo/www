<?php /* Smarty version Smarty 3.1.0, created on 2012-07-04 16:50:56
         compiled from "C:\wamp\www\html\Themes\V1.0\html_helpers\yes_no_more_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119994ff4747023fbe2-90359151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979f188dac086b8416a3921ecb40684460d2883c' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\html_helpers\\yes_no_more_details.tpl',
      1 => 1330443144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119994ff4747023fbe2-90359151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
    'condition_related_questions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4ff474702fc9d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff474702fc9d')) {function content_4ff474702fc9d($_smarty_tpl) {?><!-- Question -->
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