<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:45
         compiled from "C:\wamp\www\html\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313704f428471936a34-22498972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2ca01ef7435918d71a6c9aef2cecc86431ffb7' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\home.tpl',
      1 => 1319564228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313704f428471936a34-22498972',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f428471b03ae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428471b03ae')) {function content_4f428471b03ae($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body>
<div id="container">
	
	<div id="fleft">
		<div id="logo">like<span class='alt'>my</span>hair.co.uk</div>
                <?php echo $_smarty_tpl->getSubTemplate ('login-box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	
	<div id="main">
		<div id="ad"></div>
        <?php echo $_smarty_tpl->getSubTemplate ('top-nav-logged-out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                
			<div id="content">
			<p class="home_content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna magna, mattis viverra molestie tincidunt, feugiat nec nisi. 
			Vestibulum pulvinar, magna id vehicula venenatis, dolor mauris facilisis justo, lacinia accumsan sapien risus at justo.
			</p>
			</div>
			
			<div id="new_content_hairstyles">
			
				<h2>Latest Hairstyles</h2>
				<?php echo $_smarty_tpl->getSubTemplate ('home-page-hairstyles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			
			<div id="new_content_saloons">
			
				<h2>Latest Saloons</h2>
				<?php echo $_smarty_tpl->getSubTemplate ('home-page-saloons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			
			<!-- mobile hair dressers -->
			<div id="new_content_mobile">
				<h2>Mobile Hairdressers</h2>
				<?php echo $_smarty_tpl->getSubTemplate ('home-page-saloons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
			
		</div>
	
	<div id="fright">
                <div id="inner-r1"><?php echo $_smarty_tpl->getSubTemplate ('search-box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
                
	</div>

	<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>


</body>

</html><?php }} ?>