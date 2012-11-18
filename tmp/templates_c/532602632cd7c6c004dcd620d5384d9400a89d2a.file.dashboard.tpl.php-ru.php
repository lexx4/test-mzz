<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:06
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2567150a8f7f6bae5e2-23223318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532602632cd7c6c004dcd620d5384d9400a89d2a' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\dashboard.tpl',
      1 => 1267710334,
    ),
  ),
  'nocache_hash' => '2567150a8f7f6bae5e2-23223318',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<table class="admin dashboard" width="40%">
    <thead>
        <tr class="first center">
            <th class="first left" width="150">Общая информация</th>
            <th class="last">&nbsp;</th>
        </tr>
    </thead>
    <tr class="last">
        <td class="first left">Версия приложения</td>
        <td class="last"><?php echo systemConfig::$appVersion;?>
</td>
    </tr>
    <tr>
        <td class="first left">Версия PHP</td>
        <td class="last"><?php echo @PHP_VERSION;?>
</td>
    </tr>
    <tr class="last">
        <td class="first left">Версия MZZ</td>
        <td class="last"><?php echo @MZZ_VERSION;?>
<?php if (@MZZ_REVISION){?>-<?php echo @MZZ_REVISION;?>
<?php }?></td>
    </tr>
</table>
