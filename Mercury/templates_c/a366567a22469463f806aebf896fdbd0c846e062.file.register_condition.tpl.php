<?php /* Smarty version Smarty 3.1.0, created on 2012-07-04 16:50:56
         compiled from "C:\wamp\www\html\Themes\V1.0\register_condition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79934ff4747013b7b4-57382220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a366567a22469463f806aebf896fdbd0c846e062' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\register_condition.tpl',
      1 => 1329835117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79934ff4747013b7b4-57382220',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'condition_related_questions' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4ff474702097d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ff474702097d')) {function content_4ff474702097d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="container">
<div id="register" class="register">
<?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['results']=='true'){?>

<form id="register_condition" name="register_condition" method="POST" value="">
<input type="hidden" name="ticket" id="ticket" value="<?php echo $_smarty_tpl->tpl_vars['condition_related_questions']->value['ticket'];?>
" />
	 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['condition_related_questions']->value['question_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	 
	 	<?php if ($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_template'][$_smarty_tpl->tpl_vars['key']->value]=='YES_NO_MORE_DETAILS'){?>
	 		<?php echo $_smarty_tpl->getSubTemplate ('html_helpers/yes_no_more_details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	 	<?php }elseif($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_template'][$_smarty_tpl->tpl_vars['key']->value]=='YES_SOMETIMES_NO_MORE_DETAILS'){?>
	 		<?php echo $_smarty_tpl->getSubTemplate ('html_helpers/yes_no_more_details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	 	<?php }elseif($_smarty_tpl->tpl_vars['condition_related_questions']->value['question_template'][$_smarty_tpl->tpl_vars['key']->value]=='MORE_DETAILS'){?>
	 		<?php echo $_smarty_tpl->getSubTemplate ('html_helpers/more_details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	 	<?php }?>
	 	
	 <?php } ?>
<input type="Submit" Value="Register for <?php echo $_smarty_tpl->tpl_vars['condition_related_questions']->value['condition_name'];?>
" />
</form>
	 
<?php }?>
</div>
</div>
</body>
</html><?php }} ?>