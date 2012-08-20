<?php /* Smarty version Smarty 3.1.0, created on 2012-08-18 23:41:12
         compiled from "/Users/Hari/Desktop/www/html/Themes/V1.0/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142010306550301a08065de7-57283816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd87b1a572454fccf3a58e13c131ae49a70b54b' => 
    array (
      0 => '/Users/Hari/Desktop/www/html/Themes/V1.0/home.tpl',
      1 => 1345284073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142010306550301a08065de7-57283816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_50301a080a34a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50301a080a34a')) {function content_50301a080a34a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="container">
	<?php echo $_smarty_tpl->getSubTemplate ('top-bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('navigation-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('home-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>