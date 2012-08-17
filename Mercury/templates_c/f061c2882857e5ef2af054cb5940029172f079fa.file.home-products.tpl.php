<?php /* Smarty version Smarty 3.1.0, created on 2012-08-17 11:30:03
         compiled from "C:\wamp\www\html\Themes\V1.0\home-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3430502e294e1ea183-45772970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f061c2882857e5ef2af054cb5940029172f079fa' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\home-products.tpl',
      1 => 1345203000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3430502e294e1ea183-45772970',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_502e294e265b4',
  'variables' => 
  array (
    'response' => 0,
    'key' => 0,
    'key1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502e294e265b4')) {function content_502e294e265b4($_smarty_tpl) {?><div id="products">
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