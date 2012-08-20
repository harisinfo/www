<?php /* Smarty version Smarty 3.1.0, created on 2012-08-18 23:41:12
         compiled from "/Users/Hari/Desktop/www/html/Themes/V1.0/home-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128008033550301a080a8f35-56841515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d659f41d4cd4f5e36abe1267970154cac9ab17' => 
    array (
      0 => '/Users/Hari/Desktop/www/html/Themes/V1.0/home-products.tpl',
      1 => 1345284073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128008033550301a080a8f35-56841515',
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
  'unifunc' => 'content_50301a080c6f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50301a080c6f1')) {function content_50301a080c6f1($_smarty_tpl) {?><div id="products">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['product']['product_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['product']['brand'][$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['item1']->key;
?>
			<div class="product_detail_<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_detail_image_main'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>
" />
			</div>
		<?php } ?>
	<?php } ?>
</div><?php }} ?>