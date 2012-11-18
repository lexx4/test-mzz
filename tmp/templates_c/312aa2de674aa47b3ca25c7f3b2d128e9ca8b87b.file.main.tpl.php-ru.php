<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:06
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2547850a8f7f6ae87f3-23101613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '312aa2de674aa47b3ca25c7f3b2d128e9ca8b87b' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\main.tpl',
      1 => 1267701568,
    ),
  ),
  'nocache_hash' => '2547850a8f7f6ae87f3-23101613',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("admin/title.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('title',"Управление сайтом"); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php  $_smarty_tpl->tpl_vars["action"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dashboard')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["action"]->key => $_smarty_tpl->tpl_vars["action"]->value){
?>
    <?php echo $_smarty_tpl->getVariable('action')->value->run();?>

<?php }} ?>