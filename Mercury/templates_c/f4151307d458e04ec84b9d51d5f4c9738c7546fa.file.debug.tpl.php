<?php /* Smarty version Smarty 3.1.0, created on 2012-02-20 17:35:46
         compiled from "C:\wamp\www\Mercury\Smarty\libs\debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207064f42847217c8c8-90347479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4151307d458e04ec84b9d51d5f4c9738c7546fa' => 
    array (
      0 => 'C:\\wamp\\www\\Mercury\\Smarty\\libs\\debug.tpl',
      1 => 1316188198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207064f42847217c8c8-90347479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_name' => 0,
    'execution_time' => 0,
    'template_data' => 0,
    'template' => 0,
    'assigned_vars' => 0,
    'vars' => 0,
    'config_vars' => 0,
    'id' => 0,
    'debug_output' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1.0',
  'unifunc' => 'content_4f42847243899',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f42847243899')) {function content_4f42847243899($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_debug_print_var')) include 'C:\wamp\www\Mercury\Smarty\libs\plugins\modifier.debug_print_var.php';
?><?php ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Smarty Debug Console</title>
<style type="text/css">

body, h1, h2, td, th, p {
    font-family: sans-serif;
    font-weight: normal;
    font-size: 0.9em;
    margin: 1px;
    padding: 0;
}

h1 {
    margin: 0;
    text-align: left;
    padding: 2px;
    background-color: #f0c040;
    color:  black;
    font-weight: bold;
    font-size: 1.2em;
 }

h2 {
    background-color: #9B410E;
    color: white;
    text-align: left;
    font-weight: bold;
    padding: 2px;
    border-top: 1px solid black;
}

body {
    background: black; 
}

p, table, div {
    background: #f0ead8;
} 

p {
    margin: 0;
    font-style: italic;
    text-align: center;
}

table {
    width: 100%;
}

th, td {
    font-family: monospace;
    vertical-align: top;
    text-align: left;
    width: 50%;
}

td {
    color: green;
}

.odd {
    background-color: #eeeeee;
}

.even {
    background-color: #fafafa;
}

.exectime {
    font-size: 0.8em;
    font-style: italic;
}

#table_assigned_vars th {
    color: blue;
}

#table_config_vars th {
    color: maroon;
}

</style>
</head>
<body>

<h1>Smarty Debug Console  -  <?php if (isset($_smarty_tpl->tpl_vars['template_name']->value)){?><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['template_name']->value);?>
<?php }else{ ?>Total Time <?php echo sprintf("%.5f",$_smarty_tpl->tpl_vars['execution_time']->value);?>
<?php }?></h1>

<?php if (!empty($_smarty_tpl->tpl_vars['template_data']->value)){?>
<h2>included templates &amp; config files (load time in seconds)</h2>

<div>
<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['template_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_loop = true;
?>
  <font color=brown><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</font>
  <span class="exectime">
   (compile <?php echo sprintf("%.5f",$_smarty_tpl->tpl_vars['template']->value['compile_time']);?>
) (render <?php echo sprintf("%.5f",$_smarty_tpl->tpl_vars['template']->value['render_time']);?>
) (cache <?php echo sprintf("%.5f",$_smarty_tpl->tpl_vars['template']->value['cache_time']);?>
)
  </span>
  <br>
<?php } ?>
</div>
<?php }?>

<h2>assigned template variables</h2>

<table id="table_assigned_vars">
    <?php  $_smarty_tpl->tpl_vars['vars'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['assigned_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vars']->iteration=0;
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vars']->key => $_smarty_tpl->tpl_vars['vars']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['vars']->iteration++;
?>
       <tr class="<?php if ($_smarty_tpl->tpl_vars['vars']->iteration%2==0){?>odd<?php }else{ ?>even<?php }?>">   
       <th>$<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vars']->key, ENT_QUOTES, 'UTF-8', true);?>
</th>
       <td><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value);?>
</td></tr>
    <?php } ?>
</table>

<h2>assigned config file variables (outer template scope)</h2>

<table id="table_config_vars">
    <?php  $_smarty_tpl->tpl_vars['vars'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['config_vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['vars']->iteration=0;
$_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vars']->key => $_smarty_tpl->tpl_vars['vars']->value){
$_loop = true;
 $_smarty_tpl->tpl_vars['vars']->iteration++;
?>
       <tr class="<?php if ($_smarty_tpl->tpl_vars['vars']->iteration%2==0){?>odd<?php }else{ ?>even<?php }?>">   
       <th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vars']->key, ENT_QUOTES, 'UTF-8', true);?>
</th>
       <td><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['vars']->value);?>
</td></tr>
    <?php } ?>

</table>
</body>
</html>
<?php  $_smarty_tpl->assign('debug_output', ob_get_contents()); Smarty::$_smarty_vars['capture']['_smarty_debug']=ob_get_clean();?>
<script type="text/javascript">
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(md5((($tmp = @$_smarty_tpl->tpl_vars['template_name']->value)===null||$tmp==='' ? '' : $tmp)), null, 0);?>
    _smarty_console = window.open("","console<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
","width=680,height=600,resizable,scrollbars=yes");
    _smarty_console.document.write("<?php echo strtr($_smarty_tpl->tpl_vars['debug_output']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
    _smarty_console.document.close();
</script>
<?php }} ?>