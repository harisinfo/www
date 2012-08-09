<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:46
         compiled from "C:\wamp\www\html\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14534f428472048620-27109070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656162a171905c876350755ac05d6365b61f3daf' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\footer.tpl',
      1 => 1318952820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14534f428472048620-27109070',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f42847215f91',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f42847215f91')) {function content_4f42847215f91($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\wamp\www\Mercury\Smarty\libs\plugins\modifier.date_format.php';
?><div id="footer">
		LikeMyHair.co.uk &#169; <?php echo smarty_modifier_date_format(time());?>

	</div>

	
	<script type="text/javascript">

	var option_v = 'city';

	/*var options = {
		script:"http://www.likemyhair.co.uk/lookup.php?json=true&limit=10&",
		varname:"city",
		json:true,
		shownoresults:false,
		maxresults:10,
		callback: function (obj) { document.getElementById('hidden').value = obj.id; }
	};*/
	
	var options = {
		script:"http://www.likemyhair.co.uk/lookup-v2.php?json=true&limit=10&",
		varname:"city",
		json:true,
		shownoresults:false,
		maxresults:10,
		callback: function (obj) { document.getElementById('hidden').value = obj.id; }
	};
	
	var as_json = new bsn.AutoSuggest('city', options);


</script>
<?php }} ?>