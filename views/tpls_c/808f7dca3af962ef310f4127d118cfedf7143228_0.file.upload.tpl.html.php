<?php
/* Smarty version 3.1.29, created on 2016-05-02 14:06:27
  from "/var/www/html/itc-test-roger/views/tpls/upload.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5726ee63998e98_43477201',
  'file_dependency' => 
  array (
    '808f7dca3af962ef310f4127d118cfedf7143228' => 
    array (
      0 => '/var/www/html/itc-test-roger/views/tpls/upload.tpl.html',
      1 => 1462169186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5726ee63998e98_43477201 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <title>Upload File</title>

</head>

<body>

<div class="container">
    <form class="form-inline " action="./upload.php" method="post" enctype="multipart/form-data">
        <div  class="form-group">
            <input type="file" name="file" id="file">
        </div>
        <button class="btn btn-default right" type="submit">Upload</button>
    </form>
    <table class="table">
        <caption>Products</caption>
        <thead>
        <tr>
            <th>id</th>
            <th>sku</th>
            <th>ean</th>
            <th>name</th>
            <th>stock</th>
            <th>availability</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tanmay</td>
            <td>Bangalore</td>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sku'];?>
</td>
            <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['ean'])===null||$tmp==='' ? '' : $tmp);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['stock'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['availability'];?>
</td>
            <td><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html><?php }
}
