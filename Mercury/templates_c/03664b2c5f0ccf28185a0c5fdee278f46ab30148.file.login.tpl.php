<?php /* Smarty version Smarty 3.1.0, created on 2012-05-04 15:38:23
         compiled from "C:\wamp\www\html\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41934fa3f5a55a90a7-89940324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03664b2c5f0ccf28185a0c5fdee278f46ab30148' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\login.tpl',
      1 => 1336145898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41934fa3f5a55a90a7-89940324',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4fa3f5a573a3b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa3f5a573a3b')) {function content_4fa3f5a573a3b($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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