<?php /* Smarty version Smarty 3.1.0, created on 2012-08-20 08:22:34
         compiled from "C:\wamp\www\html\Themes\V1.0\search-products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2301502e2d4ff11a35-04487095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d362ba5cfe3fd72776906d1e1dd2ac0c4ec193' => 
    array (
      0 => 'C:\\wamp\\www\\html\\Themes\\V1.0\\search-products.tpl',
      1 => 1345450742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2301502e2d4ff11a35-04487095',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_502e2d5002a7f',
  'variables' => 
  array (
    'response' => 0,
    'key' => 0,
    'request' => 0,
    'key1' => 0,
    'key2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502e2d5002a7f')) {function content_502e2d5002a7f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\wamp\www\Mercury\Plugins\Smarty\libs\plugins\function.math.php';
?><div id="products">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['product']['product_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	<div id="product_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
		<h2><a href="?module=product&category=<?php echo $_smarty_tpl->tpl_vars['request']->value['search']['category_id'];?>
&sub_category_id=<?php echo $_smarty_tpl->tpl_vars['request']->value['search']['sub_category_id'];?>
&product_id=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_title'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></h2> 
		<div class="about_product">
		<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_description'][$_smarty_tpl->tpl_vars['key']->value];?>

		</div>
		<?php  $_smarty_tpl->tpl_vars['item1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['response']->value['product']['brand'][$_smarty_tpl->tpl_vars['key']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item1']->key => $_smarty_tpl->tpl_vars['item1']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['item1']->key;
?>
		
			<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['combine_product_id'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]!=0){?>
				<?php $_smarty_tpl->tpl_vars["key2"] = new Smarty_variable($_smarty_tpl->tpl_vars['key1']->value, null, 0);?>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['combine_product_id'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]==0){?>
				<h3>
					<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_name'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>

					
					<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['dispense_mg'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]!=0.00){?>
					
						<?php echo smarty_function_math(array('equation'=>'x','x'=>$_smarty_tpl->tpl_vars['response']->value['product']['dispense_mg'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value],'format'=>"%.1f"),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['key2']->value!=0){?> 
						/ <?php echo smarty_function_math(array('equation'=>'x','x'=>$_smarty_tpl->tpl_vars['response']->value['product']['dispense_mg'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key2']->value],'format'=>"%.1f"),$_smarty_tpl);?>

						<?php }?>
						mg						
						
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['dispense_ml'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]!=0){?>
					
						<?php echo smarty_function_math(array('equation'=>'x','x'=>$_smarty_tpl->tpl_vars['response']->value['product']['dispense_ml'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value],'format'=>"%.1f"),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['key2']->value!=0){?> 
						/ <?php echo smarty_function_math(array('equation'=>'x','x'=>$_smarty_tpl->tpl_vars['response']->value['product']['dispense_ml'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key2']->value],'format'=>"%.1f"),$_smarty_tpl);?>

						<?php }?>
						ml
						
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['dispense_number'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]!=0){?>
						x 
						<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['dispense_number'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>

						<?php if ($_smarty_tpl->tpl_vars['key2']->value!=0){?> 
						/ <?php echo $_smarty_tpl->tpl_vars['response']->value['product']['dispense_number'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key2']->value];?>

						<?php }?>
						
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['key2']->value!=0){?> 
					(<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['dispense_number'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]+$_smarty_tpl->tpl_vars['response']->value['product']['dispense_number'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key2']->value];?>
)
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['dispense_type'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value]!=''){?>
					 <?php echo $_smarty_tpl->tpl_vars['response']->value['product']['dispense_type'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>

					<?php }?>					
					<?php $_smarty_tpl->tpl_vars["key2"] = new Smarty_variable(0, null, 0);?>
				</h3>
				
				<div class="product_detail_<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_detail_image_main'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>
" />
				</div>
				
				<div class="product_detail_<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
">
					<p>
					<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_detail_description'][$_smarty_tpl->tpl_vars['key']->value][$_smarty_tpl->tpl_vars['key1']->value];?>

					</p>
				</div>
				
				<div id="product_order_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
				<?php if ($_smarty_tpl->tpl_vars['response']->value['product']['medical_condition_id'][$_smarty_tpl->tpl_vars['key']->value]){?>
					<a href="?module=condition&condition_id=<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['medical_condition_id'][$_smarty_tpl->tpl_vars['key']->value];?>
&product_id=<?php echo $_smarty_tpl->tpl_vars['response']->value['product']['product_id'][$_smarty_tpl->tpl_vars['key']->value];?>
">Start Free Consultation to Order</a>
				<?php }else{ ?>
					<a href="add">Add to Basket</a>
				<?php }?>
				</div>
				
				
			<?php }?>	
		<?php } ?>
		</div>
	<?php } ?>
</div><?php }} ?>