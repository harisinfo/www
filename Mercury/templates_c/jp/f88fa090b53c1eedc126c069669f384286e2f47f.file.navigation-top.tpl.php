<?php /* Smarty version Smarty 3.1.0, created on 2012-09-20 11:26:57
         compiled from "C:\wamp\www\html\Themes\V1.0\navigation-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22601505ae04b084b96-24176506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f88fa090b53c1eedc126c069669f384286e2f47f' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\navigation-top.tpl',
      1 => 1348140413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22601505ae04b084b96-24176506',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_505ae04b16f4d',
  'variables' => 
  array (
    'response' => 0,
    'key' => 0,
    'key1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505ae04b16f4d')) {function content_505ae04b16f4d($_smarty_tpl) {?><div id="navigation-top">
<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['category_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<li>
<?php echo $_smarty_tpl->tpl_vars['response']->value['category_label'][$_smarty_tpl->tpl_vars['key']->value];?>

	<?php if ($_smarty_tpl->tpl_vars['response']->value['sub_category_id'][$_smarty_tpl->tpl_vars['key']->value]){?>
	<ul>
		<li><a href="?application=JP&module=product&category_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">All Products - <?php echo $_smarty_tpl->tpl_vars['response']->value['category_label'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
		<?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['sub_category_id'][$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['item1']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['response']->value['sub_category_label'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]){?>
				<li><a href="?application=JP&module=product&category_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
&sub_category_id=<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['response']->value['sub_category_label'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>
</a></li>
			<?php }?>
		<?php } ?>
	</ul>
	<?php }?>
</li>
<?php } ?>
</ul>
</div>
<?php }} ?>