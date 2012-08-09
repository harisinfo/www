<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:45
         compiled from "C:\wamp\www\html\templates\home-page-saloons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66154f428471e483c4-04584221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c581282aebfd7842aa06fb7a7ce49d6597ec2e1' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\home-page-saloons.tpl',
      1 => 1319563987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66154f428471e483c4-04584221',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saloons' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f428471ec36a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428471ec36a')) {function content_4f428471ec36a($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['saloons']->value['results']=='true'){?>
<div class="row_1" style="height: 400px; width: auto">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['saloons']->value['saloon_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div class="img">
                        <img src="/user_images/<?php if ($_smarty_tpl->tpl_vars['saloons']->value['saloon_images'][$_smarty_tpl->tpl_vars['key']->value][1]){?><?php echo $_smarty_tpl->tpl_vars['saloons']->value['saloon_images'][$_smarty_tpl->tpl_vars['key']->value][1];?>
<?php }else{ ?>noimage.gif<?php }?>" />
                        <div class="desc"><a href="/saloon-detail-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
.html"><?php echo $_smarty_tpl->tpl_vars['saloons']->value['saloon_name'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></div>
                        <div class="rating">
                        <?php echo $_smarty_tpl->tpl_vars['saloons']->value['saloon_address_line_1'][$_smarty_tpl->tpl_vars['key']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['saloons']->value['saloon_address_line_2'][$_smarty_tpl->tpl_vars['key']->value];?>

                        </div>
                        </div>
     <?php } ?>
</div>
<?php }else{ ?>
<div class="row_1" style="height: 400px; width: auto">
						<div class="saloon_1">
						No results found
						</div>
</div>
<?php }?><?php }} ?>