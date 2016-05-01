<?php
/* Smarty version 3.1.29, created on 2016-05-01 15:03:07
  from "/var/www/html/itc-test-roger/tpls/test.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5725aa2ba50eb4_00864826',
  'file_dependency' => 
  array (
    'e2bb02f1ba5a7150f7a78be6b16a97703544bcb0' => 
    array (
      0 => '/var/www/html/itc-test-roger/tpls/test.tpl.html',
      1 => 1462084737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5725aa2ba50eb4_00864826 ($_smarty_tpl) {
?>
<html>

index.

<br/>

<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<br/>

----------------------------------------------------------<br/>

<?php
$_from = $_smarty_tpl->tpl_vars['names']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_0_saved_item = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
$__foreach_name_0_saved_local_item = $_smarty_tpl->tpl_vars['name'];
?>

<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<br/>

<?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved_local_item;
}
if ($__foreach_name_0_saved_item) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved_item;
}
?>

</html><?php }
}
