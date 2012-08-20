<?php /* Smarty version Smarty 3.1.0, created on 2012-08-18 23:40:21
         compiled from "/Users/Hari/Desktop/www/html/Themes/V1.0/navigation-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1942893760503019d579e909-81219614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b97f58717463635b24c7972710c92193931ca93' => 
    array (
      0 => '/Users/Hari/Desktop/www/html/Themes/V1.0/navigation-top.tpl',
      1 => 1344887596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942893760503019d579e909-81219614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'response' => 0,
    'key' => 0,
    'key1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_503019d57d9f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503019d57d9f1')) {function content_503019d57d9f1($_smarty_tpl) {?><div id="navigation-top">
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
		<li><a href="?module=product&category_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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
				<li><a href="?module=product&category_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
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