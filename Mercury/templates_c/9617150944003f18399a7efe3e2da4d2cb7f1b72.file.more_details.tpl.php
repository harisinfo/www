<?php /* Smarty version Smarty 3.1.0, created on 2012-02-28 15:33:57
         compiled from "C:\wamp\www\html\templates\html_helpers\more_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67144f42947f9a0ec7-28097855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9617150944003f18399a7efe3e2da4d2cb7f1b72' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\html_helpers\\more_details.tpl',
      1 => 1330443233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67144f42947f9a0ec7-28097855',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f42947f9f427',
  'variables' => 
  array (
    'key' => 0,
    'condition_related_questions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f42947f9f427')) {function content_4f42947f9f427($_smarty_tpl) {?><div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]==true){?>error<?php }?><?php }?>">

<!-- Question -->
<div id="question_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<?php echo $_smarty_tpl->tpl_vars['condition_related_questions']->value['question_text_default'][$_smarty_tpl->tpl_vars['key']->value];?>

</div>

<!-- More info -->
<div id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<textarea id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class=""><?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value]){?><?php echo $_smarty_tpl->tpl_vars['condition_related_questions']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?></textarea>
</div>

</div>

<div class="clear-height"></div><?php }} ?>