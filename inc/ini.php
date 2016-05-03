<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午2:36
 */
require_once 'libs/Smarty.class.php';
/*
 * Use smarty template engine
 */
$smarty = new Smarty();

$smarty->setTemplateDir('views/tpls')//APP_ROOT.
->setCompileDir('views/tpls_c');

$smarty->auto_literal = false;//设置空格有效
/*
 * set delimiter for smarty template engine
 */
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

