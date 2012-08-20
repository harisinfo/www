<?php /* Smarty version Smarty 3.1.0, created on 2012-08-18 23:40:21
         compiled from "/Users/Hari/Desktop/www/html/Themes/V1.0/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:483359103503019d5b26aa4-08038150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93b35afd94dd7e9f5007fadf2af67558cc981ab6' => 
    array (
      0 => '/Users/Hari/Desktop/www/html/Themes/V1.0/footer.tpl',
      1 => 1344887596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483359103503019d5b26aa4-08038150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_503019d5c5621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503019d5c5621')) {function content_503019d5c5621($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/Hari/Desktop/www/Mercury/Plugins/Smarty/libs/plugins/modifier.date_format.php';
?><div id="footer">
Company Copyright &#169; <?php echo smarty_modifier_date_format(time());?>

</div>
<?php }} ?>