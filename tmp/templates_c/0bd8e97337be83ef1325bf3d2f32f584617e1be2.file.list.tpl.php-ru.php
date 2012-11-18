<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:52
         compiled from "D:\_develop\AppServ\www\notebook.loc\modules\notebook\templates\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283650a8f7e8460638-36481669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bd8e97337be83ef1325bf3d2f32f584617e1be2' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\modules\\notebook\\templates\\list.tpl',
      1 => 1353052562,
    ),
  ),
  'nocache_hash' => '283650a8f7e8460638-36481669',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\libs\smarty\plugins\modifier.date_format.php';
?><?php echo $_smarty_tpl->getVariable('notebook')->value->getJip();?>

<table>
	<tr>
		<th>Имя</th>
		<th>Телефон</th>
		<th>Адресс</th>
		<th>Возраст</th>
		<th>Дата создания</th>
		<th>Дата изменения</th>
		<th>jip</th
	</tr>
	<?php  $_smarty_tpl->tpl_vars['notebookItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('notebookItems')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['notebookItem']->key => $_smarty_tpl->tpl_vars['notebookItem']->value){
?>
	<tr>
		<td>
			<a href="<?php echo smarty_function_url(array('route'=>'withId','module'=>'notebook','action'=>'view','id'=>$_smarty_tpl->getVariable('notebookItem')->value->getId()),$_smarty_tpl->smarty,$_smarty_tpl);?>
">
			<?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getName());?>

			</a>
		</td>
		<td><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getPhone());?>
</td>
		<td><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getAddress());?>
</td>
		<td><?php echo smarty_modifier_h($_smarty_tpl->getVariable('notebookItem')->value->getAge());?>
</td>
		<td><?php echo smarty_modifier_h(smarty_modifier_date_format($_smarty_tpl->getVariable('notebookItem')->value->getDateCreated(),"%d.%m.%Y"));?>
</td>
		<td><?php echo smarty_modifier_h(smarty_modifier_date_format($_smarty_tpl->getVariable('notebookItem')->value->getDateModified(),"%d.%m.%Y"));?>
</td>
		<td><?php echo $_smarty_tpl->getVariable('notebookItem')->value->getJip();?>
</td>
	</tr>
	<?php }} ?>
	
</table>