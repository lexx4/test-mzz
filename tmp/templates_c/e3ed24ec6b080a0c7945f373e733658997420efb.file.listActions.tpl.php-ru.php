<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:22:40
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\listActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2806150a8fd40115f29-23365420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ed24ec6b080a0c7945f373e733658997420efb' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\listActions.tpl',
      1 => 1267701568,
    ),
  ),
  'nocache_hash' => '2806150a8fd40115f29-23365420',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
if (!is_callable('smarty_function_icon')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.icon.php';
?><div class="jipTitle">Список действий класса <i><?php echo smarty_modifier_h($_smarty_tpl->getVariable('class_name')->value);?>
</i> модуля <i><?php echo smarty_modifier_h($_smarty_tpl->getVariable('module')->value->getTitle());?>
</i></div>

<table width="100%" border="0" cellpadding="5" cellspacing="0" align="center">
    <tr>
        <td colspan="3"><a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module_name'=>$_smarty_tpl->getVariable('module')->value->getName(),'class_name'=>$_smarty_tpl->getVariable('class_name')->value,'action'=>"addAction"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link">Создать действие <?php echo smarty_function_icon(array('sprite'=>"sprite:admin/action-add/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars["action"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('actions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["action"]->key => $_smarty_tpl->tpl_vars["action"]->value){
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["action"]->key;
?>
        <tr>
            <td><?php if ($_smarty_tpl->getVariable('action')->value->getIcon()){?><?php echo smarty_function_icon(array('sprite'=>$_smarty_tpl->getVariable('action')->value->getIcon(),'active'=>true),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php }?></td>
            <td width="25%"><?php echo smarty_modifier_h($_smarty_tpl->getVariable('name')->value);?>
</td>
            <td width="60%"><?php if ($_smarty_tpl->getVariable('action')->value->getTitle()){?><?php echo smarty_modifier_h($_smarty_tpl->getVariable('action')->value->getTitle());?>
<?php }else{ ?><span style="color: #999;">названия нет</span><?php }?></td>
            <td style="width: 15%; text-align: right;">
                <a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module'=>"admin",'module_name'=>$_smarty_tpl->getVariable('module')->value->getName(),'class_name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"editAction"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Редактировать действие"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/action-edit/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                <a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module'=>"admin",'module_name'=>$_smarty_tpl->getVariable('module')->value->getName(),'class_name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"deleteAction"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Удалить действие"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/action-del/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
            </td>
        </tr>
    <?php }} ?>
</table>