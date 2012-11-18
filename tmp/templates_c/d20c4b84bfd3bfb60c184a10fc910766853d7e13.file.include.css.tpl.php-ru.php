<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:34
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\simple\templates\include.css.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1278750a8f7d699d6d7-17288658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd20c4b84bfd3bfb60c184a10fc910766853d7e13' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\simple\\templates\\include.css.tpl',
      1 => 1270018639,
    ),
  ),
  'nocache_hash' => '1278750a8f7d699d6d7-17288658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('__media')->value['css'])){?>
<?php  $_smarty_tpl->tpl_vars["cssitem"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('__media')->value['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["cssitem"]->key => $_smarty_tpl->tpl_vars["cssitem"]->value){
 $_smarty_tpl->tpl_vars["file"]->value = $_smarty_tpl->tpl_vars["cssitem"]->key;
?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('cssitem')->value['tpl'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('filename',$_smarty_tpl->getVariable('file')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }} ?>
<?php }?>