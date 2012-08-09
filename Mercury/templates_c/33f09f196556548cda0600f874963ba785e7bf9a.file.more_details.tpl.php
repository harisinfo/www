<?php /* Smarty version Smarty 3.1.0, created on 2012-07-04 16:50:56
         compiled from "C:\wamp\www\html\Themes\V1.0\html_helpers\more_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59324ff4747032a5a4-17269642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f09f196556548cda0600f874963ba785e7bf9a' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\html_helpers\\more_details.tpl',
      1 => 1330443233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59324ff4747032a5a4-17269642',
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
  'unifunc' => 'content_4ff474703a21c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff474703a21c')) {function content_4ff474703a21c($_smarty_tpl) {?><div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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