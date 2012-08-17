<?php /* Smarty version Smarty 3.1.0, created on 2012-08-17 11:21:50
         compiled from "C:\wamp\www\html\Themes\V1.0\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69205029023b627354-36678082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57509285e890567c0cc72d574865e74c3d584b27' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\home.tpl',
      1 => 1345201983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69205029023b627354-36678082',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_5029023b6e0b9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5029023b6e0b9')) {function content_5029023b6e0b9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="container">
	<?php echo $_smarty_tpl->getSubTemplate ('top-bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('navigation-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('home-products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>