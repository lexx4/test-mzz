<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:04
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:965850a8f7f43ae265-71128714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0880282229ad533aeee53b01f065fe44c852a9' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\menu.tpl',
      1 => 1268206935,
    ),
  ),
  'nocache_hash' => '965850a8f7f43ae265-71128714',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
if (!is_callable('smarty_function_icon')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.icon.php';
if (!is_callable('smarty_modifier_i18n')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.i18n.php';
?><?php if (!empty($_smarty_tpl->getVariable('menu')->value)){?>
    <ul id="adminMenu" class="adminMenu">
        <?php  $_smarty_tpl->tpl_vars["module"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["moduleName"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["module"]->key => $_smarty_tpl->tpl_vars["module"]->value){
 $_smarty_tpl->tpl_vars["moduleName"]->value = $_smarty_tpl->tpl_vars["module"]->key;
?>
            <li id="mzz-adm-menu-<?php echo $_smarty_tpl->getVariable('moduleName')->value;?>
" class="<?php if (count($_smarty_tpl->getVariable('module')->value['actions'])>1||(count($_smarty_tpl->getVariable('module')->value['actions'])===1&&!isset($_smarty_tpl->getVariable('module')->value['actions']['admin']))){?>expanded<?php }?> <?php if ($_smarty_tpl->getVariable('moduleName')->value==$_smarty_tpl->getVariable('current_module')->value){?>active<?php }?>">
                <span <?php if (!isset($_smarty_tpl->getVariable('module')->value['actions']['admin'])){?>class="noa"<?php }?>><?php if (isset($_smarty_tpl->getVariable('module')->value['actions']['admin'])){?><a href="<?php if ($_smarty_tpl->getVariable('moduleName')->value=='admin'){?><?php echo smarty_function_url(array('route'=>'adminSimpleActions','action'=>'admin'),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_url(array('route'=>'withAnyParam','module'=>'admin','name'=>$_smarty_tpl->getVariable('moduleName')->value,'action'=>'admin'),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php }?>"><?php }?>
<?php echo smarty_function_icon(array('sprite'=>(($tmp = @$_smarty_tpl->getVariable('module')->value['icon'])===null||$tmp==='' ? "sprite:admin/module/admin" : $tmp)),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php echo $_smarty_tpl->getVariable('module')->value['info']->getTitle();?>

                <?php if (isset($_smarty_tpl->getVariable('module')->value['actions']['admin'])){?></a><?php }?></span>
                <?php if (count($_smarty_tpl->getVariable('module')->value['actions'])>1||(count($_smarty_tpl->getVariable('module')->value['actions'])===1&&!isset($_smarty_tpl->getVariable('module')->value['actions']['admin']))){?>
                    <ol>
                    <?php  $_smarty_tpl->tpl_vars["action"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('module')->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["action"]->key => $_smarty_tpl->tpl_vars["action"]->value){
?>
                        <?php if ($_smarty_tpl->getVariable('action')->value->getName()!='admin'){?>
                                <li>
<span><a <?php if ($_smarty_tpl->getVariable('action')->value->getName()==$_smarty_tpl->getVariable('current_action')->value){?> class="active"<?php }?> href="<?php if ($_smarty_tpl->getVariable('moduleName')->value=='admin'){?><?php echo smarty_function_url(array('route'=>'adminSimpleActions','action'=>$_smarty_tpl->getVariable('action')->value->getName()),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_url(array('route'=>'withAnyParam','module'=>'admin','name'=>$_smarty_tpl->getVariable('moduleName')->value,'action'=>$_smarty_tpl->getVariable('action')->value->getName()),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php }?>">
<?php echo smarty_function_icon(array('sprite'=>$_smarty_tpl->getVariable('action')->value->getIcon()),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php if ($_smarty_tpl->getVariable('action')->value->getTitle()){?><?php echo smarty_modifier_i18n($_smarty_tpl->getVariable('action')->value->getTitle(),$_smarty_tpl->getVariable('moduleName')->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('module')->value['info']->getName();?>
<?php }?></a></span></li>
                        <?php }?>
                    <?php }} ?>
                    </ol>
                <?php }?>

            </li>
        <?php }} ?>
    </ul>
<?php }?>