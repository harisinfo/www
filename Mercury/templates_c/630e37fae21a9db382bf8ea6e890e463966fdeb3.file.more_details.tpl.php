<?php /* Smarty version Smarty 3.1.0, created on 2012-08-19 05:11:14
         compiled from "/Users/Hari/Desktop/www/html/Themes/V1.0/html_helpers/more_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206532501350306762355e45-29396872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '630e37fae21a9db382bf8ea6e890e463966fdeb3' => 
    array (
      0 => '/Users/Hari/Desktop/www/html/Themes/V1.0/html_helpers/more_details.tpl',
      1 => 1345061125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206532501350306762355e45-29396872',
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
  'unifunc' => 'content_5030676246935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5030676246935')) {function content_5030676246935($_smarty_tpl) {?><div id="question_container_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]){?><?php if ($_smarty_tpl->tpl_vars['response']->value['errors']['error_flag'][$_smarty_tpl->tpl_vars['key']->value]==true){?>error<?php }?><?php }?>">

<!-- Question -->
<div id="question_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
<?php echo $_smarty_tpl->tpl_vars['response']->value['question_text_default'][$_smarty_tpl->tpl_vars['key']->value];?>

</div>

<!-- More info -->
<div id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="">
<textarea id="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="more_info_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class=""><?php if ($_smarty_tpl->tpl_vars['response']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value]){?><?php echo $_smarty_tpl->tpl_vars['response']->value['question_more_info'][$_smarty_tpl->tpl_vars['key']->value];?>
<?php }?></textarea>
</div>

</div>

<div class="clear-height"></div><?php }} ?>