<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:15:24
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\toolbarModules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3017450a8fb8c6325b3-34459078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126ef7039328248e5f151206458fe88227697828' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\toolbarModules.tpl',
      1 => 1277116144,
    ),
  ),
  'nocache_hash' => '3017450a8fb8c6325b3-34459078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
if (!is_callable('smarty_function_icon')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.icon.php';
?><?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mods')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
?>
            <?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable($_smarty_tpl->getVariable('module')->value->getName(), null, null);?>
            <?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable(sizeof($_smarty_tpl->getVariable('module')->value->getActions()), null, null);?>
            <table id="module-<?php echo $_smarty_tpl->getVariable('name')->value;?>
" class="toolbar admin" cellspacing="0">
                <thead>
                    <tr class="first">
                        <th class="first name"><img src="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/images/exp_<?php if (isset($_smarty_tpl->getVariable('hiddenClasses')->value[$_smarty_tpl->getVariable('name')->value])){?>plus<?php }else{ ?>minus<?php }?>.png" class="expandClose" onclick="devToolbar.toggleModule('<?php echo $_smarty_tpl->getVariable('name')->value;?>
', this);" width="16" height="16" alt="expand/close classes list" title="expand/collapse classes" /><?php echo $_smarty_tpl->getVariable('name')->value;?>
<?php if (!$_smarty_tpl->getVariable('module')->value->isEnabled()){?> <sup style="color: #CCCCCC">disabled</sup><?php }?></th>
                        <th class="last right">
                            <a href="<?php echo smarty_function_url(array('route'=>"withAnyParam",'module'=>"admin",'name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"config"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Редактировать конфигурацию"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/action/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"accessEditRoles",'module_name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"list"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Редактировать права доступа"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/module-acl/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"withAnyParam",'module'=>"admin",'name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"editModule"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Редактировать модуль"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/module-edit/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"withAnyParam",'module'=>"admin",'name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"deleteModule"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Удалить модуль"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/module-del/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"withAnyParam",'module'=>"admin",'name'=>$_smarty_tpl->getVariable('name')->value,'action'=>"addClass"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Добавить класс"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/class-add/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                        </th>
                    </tr>
                </thead>
                <tbody id="module-<?php echo $_smarty_tpl->getVariable('name')->value;?>
-classes" <?php if (isset($_smarty_tpl->getVariable('hiddenClasses')->value[$_smarty_tpl->getVariable('name')->value])){?>style="display: none"<?php }?>>
                <?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value->getClasses(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['class']->total=($_from instanceof Traversable)?iterator_count($_from):count($_from);
 $_smarty_tpl->tpl_vars['class']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['classes']['total'] = $_smarty_tpl->tpl_vars['class']->total;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
 $_smarty_tpl->tpl_vars['class']->iteration++;
 $_smarty_tpl->tpl_vars['class']->last = $_smarty_tpl->tpl_vars['class']->iteration === $_smarty_tpl->tpl_vars['class']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['classes']['last'] = $_smarty_tpl->tpl_vars['class']->last;
?>
                    <tr id="class-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['classes']['last']){?>last<?php }?>">
                        <td class="first name"><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
</td>
                        <td class="last right">
                            <a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module'=>"admin",'module_name'=>$_smarty_tpl->getVariable('name')->value,'class_name'=>$_smarty_tpl->tpl_vars['class']->value,'action'=>"listActions"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Редактировать действия класса"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/action-edit/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module'=>"admin",'module_name'=>$_smarty_tpl->getVariable('name')->value,'class_name'=>$_smarty_tpl->tpl_vars['class']->value,'action'=>"map"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Map"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/db-table/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module'=>"admin",'module_name'=>$_smarty_tpl->getVariable('name')->value,'class_name'=>$_smarty_tpl->tpl_vars['class']->value,'action'=>"editClass"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Редактировать класс"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/class-edit/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                            <a href="<?php echo smarty_function_url(array('route'=>"adminModuleEntity",'module'=>"admin",'module_name'=>$_smarty_tpl->getVariable('name')->value,'class_name'=>$_smarty_tpl->tpl_vars['class']->value,'action'=>"deleteClass"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link" title="Удалить класс"><?php echo smarty_function_icon(array('sprite'=>"sprite:admin/class-del/admin"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</a>
                        </td>
                    </tr>
                <?php }} else { ?>
                    <tr class="last empty">
                        <td class="first name" colspan="2">--- классов нет ---</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php }} ?>