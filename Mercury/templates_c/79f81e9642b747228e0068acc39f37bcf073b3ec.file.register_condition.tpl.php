<?php /* Smarty version Smarty 3.1.0, created on 2012-02-21 14:38:53
         compiled from "C:\wamp\www\html\templates\register_condition.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70584f428e4a276115-41618845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79f81e9642b747228e0068acc39f37bcf073b3ec' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\register_condition.tpl',
      1 => 1329835117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70584f428e4a276115-41618845',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f428e4a2f2cb',
  'variables' => 
  array (
    'condition_related_questions' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428e4a2f2cb')) {function content_4f428e4a2f2cb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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