<?php /* Smarty version Smarty 3.1.0, created on 2012-08-20 09:46:09
         compiled from "C:\wamp\www\html\Themes\V1.0\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9429503207618179d3-09348210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c191d030d68a114ceacaff1605925f2c229bc26' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\login.tpl',
      1 => 1336145898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9429503207618179d3-09348210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_503207618a0f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503207618a0f6')) {function content_503207618a0f6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="container">
<div id="login" class="login">

<form id="login" name="login" method="POST" value="">

<div>
<input type="text" name="user_name" id="user_name" />
</div>

<div>
<input type="password" name="password" id="password" />
</div>


<input type="Submit" Value="Login" />
</form>

</div>
</div>
</body>
</html><?php }} ?>