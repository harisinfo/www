<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:45
         compiled from "C:\wamp\www\html\templates\home-page-hairstyles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136544f428471c81910-76794608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7f5b9fd62a90d0166bddc29fc8f04a1c536522' => 
    array (
      0 => 'C:\\wamp\\www\\html\\templates\\home-page-hairstyles.tpl',
      1 => 1319563999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136544f428471c81910-76794608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_hair_styles' => 0,
    'key' => 0,
    'item' => 0,
    'message_loop' => 0,
    'star_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f428471e22ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f428471e22ab')) {function content_4f428471e22ab($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['user_hair_styles']->value['results']=='true'){?>
<div class="row_1" style="height: 400px; width: auto">
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_hair_styles']->value['user_hairstyle_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                        <div class="img">
                        <img src="/user_images/<?php echo $_smarty_tpl->tpl_vars['user_hair_styles']->value['user_hairstyle_image'][$_smarty_tpl->tpl_vars['key']->value];?>
" />
                        <div class="desc">Submitted by <?php echo $_smarty_tpl->tpl_vars['user_hair_styles']->value['user_first_name'][$_smarty_tpl->tpl_vars['item']->value];?>
</div>
                        <div class="rating">
                        <script type="text/javascript" language="javascript" src="/scripts/ratings.js"></script>
                        <span id="rateStatus_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">Rate Me...</span>
                        <span id="ratingSaved">Rating Saved!</span>
                        <input type="hidden" name="hidden_state_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="hidden_state_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="0" />
                            <div title="Rate Me..." id="rateMe" style="margin-left:30px;margin-top:5px;margin-bottom:5px;">
                                <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['name'] = 'foo';
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['foo']['total']);
?>
                                <?php $_smarty_tpl->tpl_vars["message_loop"] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'], null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['user_hair_styles']->value['user_hairstyle_vote'][$_smarty_tpl->tpl_vars['key']->value]>=$_smarty_tpl->tpl_vars['message_loop']->value){?>
                                <?php $_smarty_tpl->tpl_vars["star_class"] = new Smarty_variable("on", null, 0);?>
                                <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars["star_class"] = new Smarty_variable('', null, 0);?>
                                <?php }?>
                                <a onmouseout="off('id_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" onmouseover="rating('id_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" title="<?php echo $_smarty_tpl->tpl_vars['user_hair_styles']->value['rating_messages'][$_smarty_tpl->tpl_vars['message_loop']->value];?>
" id="id_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onclick="rateIt('id_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['foo']['iteration'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" class="<?php echo $_smarty_tpl->tpl_vars['star_class']->value;?>
"></a>
                                <?php endfor; endif; ?>
                            </div>
                        </div>
                        </div>
     <?php } ?>
</div>
<?php }?><?php }} ?>