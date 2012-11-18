<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:06
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\user\templates\admin\alreadyLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114050a8f7f6c5e6e4-02290636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765f0f0c43185bbc72fe715efcb3e3ef4f0b45d0' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\user\\templates\\admin\\alreadyLogin.tpl',
      1 => 1301994405,
    ),
  ),
  'nocache_hash' => '114050a8f7f6c5e6e4-02290636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
?>Haba-haba, <?php echo smarty_modifier_h($_smarty_tpl->getVariable('user')->value->getLogin());?>
 (ID: <?php echo $_smarty_tpl->getVariable('user')->value->getId();?>
) | <a href="<?php ob_start();?><?php echo smarty_function_url(array('appendGet'=>true,'encode'=>true),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('route'=>'default2','module'=>'user','action'=>'exit','_url'=>$_tmp1,'_csrf'=>true),$_smarty_tpl->smarty,$_smarty_tpl);?>
">Выйти</a>