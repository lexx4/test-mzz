<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:15:24
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\devToolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2895350a8fb8c50e014-04615829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '458ae4125e765c7052283ebb40c629400c11b03b' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\devToolbar.tpl',
      1 => 1283247338,
    ),
  ),
  'nocache_hash' => '2895350a8fb8c50e014-04615829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_add')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.add.php';
if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
if (!is_callable('smarty_function_icon')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.icon.php';
?><?php echo smarty_function_add(array('file'=>"admin/toolbar.css"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php echo smarty_function_add(array('file'=>"admin/devToolbar.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>


<?php $_template = new Smarty_Internal_Template("admin/title.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"devToolBar"); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="toolbarBlockWrap">
    <div id="modulesApp" class="toolbarBlock">
        <span class="toolbarSectionName"><strong>Модули</strong> и классы <a href="<?php echo smarty_function_url(array('route'=>"default2",'module'=>"admin",'action'=>"addModule"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/module-add/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a></span>
        <?php $_template = new Smarty_Internal_Template("admin/toolbarModules.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('mods',$_smarty_tpl->getVariable('modules')->value['app']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
 </div>
<div class="toolbarBlockWrap">
    <div id="modulesSys" class="toolbarBlock">
        <span class="toolbarSectionName"><strong>Системные Модули</strong> и классы</span>
         <?php $_template = new Smarty_Internal_Template("admin/toolbarModules.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('mods',$_smarty_tpl->getVariable('modules')->value['sys']); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
 </div>