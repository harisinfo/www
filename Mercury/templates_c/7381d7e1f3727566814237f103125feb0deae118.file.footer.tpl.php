<?php /* Smarty version Smarty 3.1.0, created on 2012-08-13 13:33:47
         compiled from "C:\wamp\www\html\Themes\V1.0\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93515029023b77cf10-43138715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7381d7e1f3727566814237f103125feb0deae118' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\footer.tpl',
      1 => 1344864790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93515029023b77cf10-43138715',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_5029023b7a8e2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5029023b7a8e2')) {function content_5029023b7a8e2($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\Mercury\Plugins\Smarty\libs\plugins\modifier.date_format.php';
?><div id="footer">
Company Copyright &#169; <?php echo smarty_modifier_date_format(time());?>

</div>
<?php }} ?>