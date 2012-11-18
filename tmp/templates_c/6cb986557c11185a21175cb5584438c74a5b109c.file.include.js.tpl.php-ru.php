<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:34
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\simple\templates\include.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3243250a8f7d69ee537-19949789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb986557c11185a21175cb5584438c74a5b109c' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\simple\\templates\\include.js.tpl',
      1 => 1270018639,
    ),
  ),
  'nocache_hash' => '3243250a8f7d69ee537-19949789',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('__media')->value['js'])){?>
<?php  $_smarty_tpl->tpl_vars["jsitem"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('__media')->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["jsitem"]->key => $_smarty_tpl->tpl_vars["jsitem"]->value){
 $_smarty_tpl->tpl_vars["file"]->value = $_smarty_tpl->tpl_vars["jsitem"]->key;
?>
<?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('jsitem')->value['tpl'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('filename',$_smarty_tpl->getVariable('file')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }} ?>
<?php }?>