<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:34
         compiled from "D:\_develop\AppServ\www\notebook.loc\modules\dummy\templates\hello.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3055150a8f7d66cd180-54039027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b959838da7a0363828ba9f349c4be72239a42d8' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\modules\\dummy\\templates\\hello.tpl',
      1 => 1270081655,
    ),
  ),
  'nocache_hash' => '3055150a8f7d66cd180-54039027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_title')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.title.php';
if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
?><?php echo smarty_function_title(array('append'=>"Hello, world!"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<h1>Hello, world!</h1>
<p>Привет, мир!</p>
<p>&nbsp;</p>
<p>Модуль: <b>dummy</b></p>
<p>Экшн: <b>hello</b></p>
<p>&nbsp;</p>
<p>Текущий контроллер: <b><?php echo smarty_modifier_h($_smarty_tpl->getVariable('path_to_app')->value);?>
/modules/dummy/controllers/dummyHelloController.php</b></p>
<p>Путь до этого шаблона: <b><?php echo smarty_modifier_h($_smarty_tpl->getVariable('path_to_app')->value);?>
/modules/dummy/templates/hello.tpl</b></p>