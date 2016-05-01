<?php
/* Smarty version 3.1.29, created on 2016-05-01 21:19:16
  from "/var/www/html/itc-test-roger/views/tpls/upload.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572602541178e7_88730627',
  'file_dependency' => 
  array (
    '808f7dca3af962ef310f4127d118cfedf7143228' => 
    array (
      0 => '/var/www/html/itc-test-roger/views/tpls/upload.tpl.html',
      1 => 1462095232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572602541178e7_88730627 ($_smarty_tpl) {
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

    <form class="form-group" action="./upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">

        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload File</button>
    </form>
</div>
</body>
</html><?php }
}
