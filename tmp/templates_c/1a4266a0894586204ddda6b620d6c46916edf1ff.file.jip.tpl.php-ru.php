<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:52
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\jip\templates\jip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3270150a8f7e85cad12-17502026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a4266a0894586204ddda6b620d6c46916edf1ff' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\jip\\templates\\jip.tpl',
      1 => 1320314543,
    ),
  ),
  'nocache_hash' => '3270150a8f7e85cad12-17502026',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_add')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.add.php';
if (!is_callable('smarty_modifier_h')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\modifier.h.php';
if (!is_callable('smarty_function_icon')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.icon.php';
?><?php if ($_smarty_tpl->getVariable('jip')->value){?>
<?php echo smarty_function_add(array('file'=>"jip.css"),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php echo smarty_function_add(array('file'=>"icons.sys.css"),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php echo smarty_function_add(array('file'=>"icons.flags.css"),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php echo smarty_function_add(array('file'=>"jip/jipCore.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>
<?php echo smarty_function_add(array('file'=>"jip/jipMenu.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>


<img src="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/images/spacer.gif" width="18" height="10" class="jip jip-button" onmouseup="if (jipMenu) {jipMenu.show(this, '<?php echo $_smarty_tpl->getVariable('jipId')->value;?>
', [<?php  $_smarty_tpl->tpl_vars['jipItem'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('jip')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['jipItem']->total=($_from instanceof Traversable)?iterator_count($_from):count($_from);
 $_smarty_tpl->tpl_vars['jipItem']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['jipItems']['total'] = $_smarty_tpl->tpl_vars['jipItem']->total;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['jipItem']->key => $_smarty_tpl->tpl_vars['jipItem']->value){
 $_smarty_tpl->tpl_vars['jipItem']->iteration++;
 $_smarty_tpl->tpl_vars['jipItem']->last = $_smarty_tpl->tpl_vars['jipItem']->iteration === $_smarty_tpl->tpl_vars['jipItem']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['jipItems']['last'] = $_smarty_tpl->tpl_vars['jipItem']->last;
?>['<?php echo smarty_modifier_h($_smarty_tpl->tpl_vars['jipItem']->value['title']);?>
', '<?php echo $_smarty_tpl->tpl_vars['jipItem']->value['url'];?>
', '<?php echo smarty_function_icon(array('sprite'=>$_smarty_tpl->tpl_vars['jipItem']->value['icon'],'jip'=>true),$_smarty_tpl->smarty,$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['jipItem']->value['lang'];?>
', <?php echo $_smarty_tpl->tpl_vars['jipItem']->value['target'];?>
]<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['jipItems']['last']){?>,<?php }?><?php }} ?>], {<?php  $_smarty_tpl->tpl_vars["langNames"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["langId"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('langs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["langNames"]->total=($_from instanceof Traversable)?iterator_count($_from):count($_from);
 $_smarty_tpl->tpl_vars["langNames"]->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["langs"]['total'] = $_smarty_tpl->tpl_vars["langNames"]->total;
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["langNames"]->key => $_smarty_tpl->tpl_vars["langNames"]->value){
 $_smarty_tpl->tpl_vars["langId"]->value = $_smarty_tpl->tpl_vars["langNames"]->key;
 $_smarty_tpl->tpl_vars["langNames"]->iteration++;
 $_smarty_tpl->tpl_vars["langNames"]->last = $_smarty_tpl->tpl_vars["langNames"]->iteration === $_smarty_tpl->tpl_vars["langNames"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["langs"]['last'] = $_smarty_tpl->tpl_vars["langNames"]->last;
?><?php echo $_smarty_tpl->getVariable('langId')->value;?>
: ['<?php echo $_smarty_tpl->getVariable('langNames')->value->getName();?>
', '<?php echo $_smarty_tpl->getVariable('langNames')->value->getLanguageName();?>
']<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['langs']['last']){?>,<?php }?><?php }} ?>});}" alt="JIP Меню" />
<?php }?>