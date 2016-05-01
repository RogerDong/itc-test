<?php
/* Smarty version 3.1.29, created on 2016-05-01 16:12:32
  from "/var/www/html/itc-test-roger/tpls/upload.tpl.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5725ba700a0427_83230211',
  'file_dependency' => 
  array (
    '73373cd6778a124a6faa21cdbe9356f3c2f843e9' => 
    array (
      0 => '/var/www/html/itc-test-roger/tpls/upload.tpl.html',
      1 => 1462090346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5725ba700a0427_83230211 ($_smarty_tpl) {
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
