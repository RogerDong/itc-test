<?php
/* Smarty version 3.1.29, created on 2016-05-04 15:59:44
  from "/var/www/html/itc-test-roger/views/tpls/upload.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5729abf0067b53_36131858',
  'file_dependency' => 
  array (
    '808f7dca3af962ef310f4127d118cfedf7143228' => 
    array (
      0 => '/var/www/html/itc-test-roger/views/tpls/upload.tpl.html',
      1 => 1462348775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5729abf0067b53_36131858 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <base href="/itc-test-roger/" />
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link>
    <title>Upload File</title>

</head>

<body>

<div class="container">


    <form class="form-inline col-lg-8 col-lg-offset-2" action="./index.php" method="post" enctype="multipart/form-data">

        <p>Choose a file:</p>
        <div  class="form-group">
            <input type="file"  name="file" id="file">
        </div>
        <button class="btn btn-default form-control" type="submit">Upload</button>
        <div>
            <p class="text-danger"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['message']->value)===null||$tmp==='' ? '' : $tmp);?>
</p>

        </div>
    </form>
    <div class="col-lg-12">
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
                <th>action</th>
            </tr>
            </thead>
            <tbody id="products">
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
            <tr id="<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="edit_tr">
                <td class="col-lg-2">
                    <span id="id_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="text" style="display: inline;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <input id="id_input_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="col-lg-12 edit_text" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span id="sku_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="text" style="display: inline;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['sku'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <input id="sku_input_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="col-lg-12 edit_text" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['sku'])===null||$tmp==='' ? '' : $tmp);?>
' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span id="ean_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="text" style="display: inline;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['ean'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <input id="ean_input_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="col-lg-12 edit_text" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['ean'])===null||$tmp==='' ? '' : $tmp);?>
' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span id="name_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="text" style="display: inline;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <input id="name_input_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="col-lg-12 edit_text" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span id="stock_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="text" style="display: inline;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['stock'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <input id="stock_input_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="col-lg-12 edit_text" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['stock'])===null||$tmp==='' ? '' : $tmp);?>
' style="display: none;">
                </td>
                <td class="col-lg-1">
                    <span id="availability_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="text" style="display: inline;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? '' : $tmp);?>
</span>
                    <input id="availability_input_<?php echo $_smarty_tpl->tpl_vars['item']->value['_id'];?>
" class="col-lg-12 edit_text" value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['availability'])===null||$tmp==='' ? '' : $tmp);?>
' style="display: none;">
                </td>
                <td class="col-lg-1">
                    <button class="btn-sm btn btn-default delete_button" >Delete</button>
                </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
            <tr  class="edit_tr add_product" style="display: none;">
                <td class="col-lg-2">
                    <span class="text" style="display: inline;"></span>
                    <input  class="col-lg-12 edit_text" value='' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span  class="text" style="display: inline;"></span>
                    <input  class="col-lg-12 edit_text" value='' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span class="text" style="display: inline;"></span>
                    <input class="col-lg-12 edit_text" value='' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span class="text" style="display: inline;"></span>
                    <input class="col-lg-12 edit_text" value='' style="display: none;">
                </td>
                <td class="col-lg-2">
                    <span class="text" style="display: inline;"></span>
                    <input class="col-lg-12 edit_text" value='' style="display: none;">
                </td>
                <td class="col-lg-1">
                    <span class="text" style="display: inline;"></span>
                    <input class="col-lg-12 edit_text" value='' style="display: none;">
                </td>
                <td class="col-lg-1">
                    <button class="btn-sm btn btn-default delete_button" >Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div>
            <button class="add_button btn-md btn btn-default delete_button">Add</button>
        </div>
    </div>

</div>

<?php echo '<script'; ?>
 src="./js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./js/table_ajax.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
