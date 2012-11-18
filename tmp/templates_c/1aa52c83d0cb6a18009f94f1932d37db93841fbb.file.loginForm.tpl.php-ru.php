<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:04
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\user\templates\admin\loginForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2198050a8f7f426ea78-93604870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aa52c83d0cb6a18009f94f1932d37db93841fbb' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\user\\templates\\admin\\loginForm.tpl',
      1 => 1268972345,
    ),
  ),
  'nocache_hash' => '2198050a8f7f426ea78-93604870',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_form')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.form.php';
if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
?><?php echo smarty_function_form(array('action'=>$_smarty_tpl->getVariable('form_action')->value,'method'=>"post",'id'=>"userLogin"),$_smarty_tpl->smarty,$_smarty_tpl);?>

Логин: <?php echo $_smarty_tpl->smarty->registered_objects['form'][0]->text(array('name'=>"login",'size'=>10,'id'=>"loginField",'tabindex'=>"1",'style'=>"margin: 0px 4px;"),$_smarty_tpl->smarty,$_smarty_tpl);?>

Пароль: <?php echo $_smarty_tpl->smarty->registered_objects['form'][0]->password(array('name'=>"password",'size'=>10,'id'=>"passwordField",'tabindex'=>"2",'style'=>"margin: 0px 4px;"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_objects['form'][0]->checkbox(array('name'=>"save",'text'=>"Запомнить",'value'=>"1",'tabindex'=>"3"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php ob_start();?><?php echo smarty_function_url(array(),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_objects['form'][0]->hidden(array('name'=>"url",'value'=>$_tmp1),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_objects['form'][0]->submit(array('name'=>"submit",'value'=>"Войти",'style'=>"margin: 0px 4px;"),$_smarty_tpl->smarty,$_smarty_tpl);?>

</form>
