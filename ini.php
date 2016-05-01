<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午2:36
 */

//define('APP_ROOT',substr(__FILE__,0,-7));

//echo APP_ROOT;//exit;


//require_once APP_ROOT.'libs/Smarty.class.php';
require_once 'libs/Smarty.class.php';

//echo APP_ROOT.'libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->setTemplateDir('tpls')//APP_ROOT.
->setCompileDir('tpls_c');

$smarty->auto_literal = false;//设置空格有效

$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

//session_start();

//引入移动辅助类。	MobileUtils.class.php
//require_once  APP_ROOT.'class/MobileUtils.class.php';

