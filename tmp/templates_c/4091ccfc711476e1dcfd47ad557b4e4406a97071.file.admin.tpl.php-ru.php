<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:08
         compiled from "D:\_develop\AppServ\www\notebook.loc\modules\notebook\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112350a8f7f8e2fd65-28023926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4091ccfc711476e1dcfd47ad557b4e4406a97071' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\modules\\notebook\\templates\\admin.tpl',
      1 => 1353068916,
    ),
  ),
  'nocache_hash' => '112350a8f7f8e2fd65-28023926',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\libs\smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template("admin/title.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"Записи"); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<table>
    <thead>
        <tr class="first center">
            <th class="first" style="width: 30px;">ID:</th>
            <th class="left">Имя</th>
            <th style="width: 120px;">Телефон</th>
            <th style="width: 120px;">Адрес</th>
            <th style="width: 120px;">Возраст</th>
            <th style="width: 120px;">Владелец</th>
            <th style="width: 120px;">Создан</th>
            <th class="last" style="width: 30px;">JIP</th>
        </tr>
    </thead>
    <tbody>
    <?php  $_smarty_tpl->tpl_vars['notebookItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('notebookItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['notebookItem']->key => $_smarty_tpl->tpl_vars['notebookItem']->value){
?>
        <tr class="center">
            <td class="first"><?php echo $_smarty_tpl->getVariable('notebookItem')->value->getId();?>
</td>
            <td class="left"><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getName());?>
</td>
            <td><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getPhone());?>
</td>
            <td><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getAddress());?>
</td>
            <td><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getAge());?>
</td>
            <td>
            	<?php if ($_smarty_tpl->getVariable('notebookItem')->value->getUser()){?>
            		<?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getUser()->getLogin());?>

            	<?php }else{ ?>
            		&mdash;
            	<?php }?>
            </td>
            <td><?php echo smarty_modifier_h(smarty_modifier_date_format($_smarty_tpl->getVariable('notebookItem')->value->getDateCreated(),"%d.%m.%Y %H:%M"));?>
</td>
            <td class="last"><?php echo $_smarty_tpl->getVariable('notebookItem')->value->getJip();?>
</td>
        </tr>
    </tbody>
    <?php }} ?>
    <tfoot>
    <tr class="last">
        <td class="first"></td>
        <td colspan="4"><?php echo $_smarty_tpl->getVariable('pager')->value->toString('admin/main/adminPager.tpl');?>
</td>
        <td class="last" colspan="2" style="text-align: right; color: #7A7A7A;">Всего: <?php echo $_smarty_tpl->getVariable('pager')->value->getItemsCount();?>
</td>
    </tr>
    </tfoot>
</table>