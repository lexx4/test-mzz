<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:34
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\timer\templates\timer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2436550a8f7d6837b10-34569871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ede3362ce58a6ab608b30e086798fa7b656f3b' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\timer\\templates\\timer.tpl',
      1 => 1321532196,
    ),
  ),
  'nocache_hash' => '2436550a8f7d6837b10-34569871',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
?>Время: <?php echo round($_smarty_tpl->getVariable('timer')->value->getPeriod(),4);?>
 сек. Запросов к БД <?php echo $_smarty_tpl->getVariable('timer')->value->getQueriesNum();?>
+<?php echo $_smarty_tpl->getVariable('timer')->value->getPreparedNum();?>
: <?php echo number_format($_smarty_tpl->getVariable('timer')->value->getQueriesTime(),4);?>
 сек.
Память: <?php echo number_format($_smarty_tpl->getVariable('timer')->value->getMemoryPeak()/1048576,1);?>
M/<?php if (is_numeric($_smarty_tpl->getVariable('timer')->value->getMemoryLimit())){?><?php echo number_format($_smarty_tpl->getVariable('timer')->value->getMemoryLimit()/1048576,1);?>
<?php }else{ ?><?php echo smarty_modifier_h($_smarty_tpl->getVariable('timer')->value->getMemoryLimit());?>
<?php }?>.
Память (текущее): <?php echo number_format($_smarty_tpl->getVariable('timer')->value->getMemoryCurrent()/1048576,1);?>
M.