<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:04
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\timer\templates\admin\timer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2775550a8f7f456a111-77849112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7adda9220678e395948ea20ff752e404dd12819' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\timer\\templates\\admin\\timer.tpl',
      1 => 1228867059,
    ),
  ),
  'nocache_hash' => '2775550a8f7f456a111-77849112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
Время: <?php echo round($_smarty_tpl->getVariable('timer')->value->getPeriod(),3);?>
 с., SQL <?php echo $_smarty_tpl->getVariable('timer')->value->getQueriesNum();?>
/<?php echo $_smarty_tpl->getVariable('timer')->value->getPreparedNum();?>
: <?php echo number_format($_smarty_tpl->getVariable('timer')->value->getQueriesTime(),3);?>
 с.