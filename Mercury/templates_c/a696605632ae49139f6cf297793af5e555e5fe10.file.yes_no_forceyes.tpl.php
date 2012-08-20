<?php /* Smarty version Smarty 3.1.0, created on 2012-08-20 08:23:58
         compiled from "C:\wamp\www\html\Themes\V1.0\html_helpers\yes_no_forceyes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211505031f41e5a14f2-36072838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a696605632ae49139f6cf297793af5e555e5fe10' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\html_helpers\\yes_no_forceyes.tpl',
      1 => 1345450742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211505031f41e5a14f2-36072838',
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
  'unifunc' => 'content_5031f41e631a9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5031f41e631a9')) {function content_5031f41e631a9($_smarty_tpl) {?><div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]==true){?>error<?php }?><?php }?>">


<!-- Question -->
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

</div>

<div class="clear-height"></div><?php }} ?>