<?php /* Smarty version Smarty 3.1.0, created on 2012-09-18 13:20:19
         compiled from "C:\wamp\www\html\Themes\harisinfo\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2499450575705348a32-21979645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42beeab12f3aaf10af612c7e54ad8258a4180690' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\harisinfo\\home.tpl',
      1 => 1347969622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2499450575705348a32-21979645',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_505757055bfb8',
  'variables' => 
  array (
    'response' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505757055bfb8')) {function content_505757055bfb8($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['response']->value['page']){?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['page']['page_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php $_smarty_tpl->tpl_vars["page_content"] = new Smarty_variable($_smarty_tpl->tpl_vars['response']->value['page']['page_content'][$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars["meta_title"] = new Smarty_variable($_smarty_tpl->tpl_vars['response']->value['page']['meta_title'][$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars["meta_keywords"] = new Smarty_variable($_smarty_tpl->tpl_vars['response']->value['page']['meta_keywords'][$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
		<?php $_smarty_tpl->tpl_vars["meta_description"] = new Smarty_variable($_smarty_tpl->tpl_vars['response']->value['page']['meta_description'][$_smarty_tpl->tpl_vars['key']->value], null, 0);?>
	<?php } ?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>

<div id="header">
	<h1><a href="http://www.harisinfo.co.uk/index.html">harisinfo - LAMP Web Developer</a></h1>
	<p><span class="address">309 Horn Lane, London W3 0BU, 07868 716 401</span></p>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="page">

	<!-- start content -->
		<?php echo $_smarty_tpl->getSubTemplate ('content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- end content -->	
	
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html><?php }} ?>