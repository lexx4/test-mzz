<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:04
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\simple\templates\include.external.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774550a8f7f4678a05-13858955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b775d1a884369161570b19cd25e9ce990625b3ce' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\simple\\templates\\include.external.js.tpl',
      1 => 1270018639,
    ),
  ),
  'nocache_hash' => '2774550a8f7f4678a05-13858955',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('__media')->value['js'])){?>
<?php $_smarty_tpl->tpl_vars["external"] = new Smarty_variable('', null, null);?><?php  $_smarty_tpl->tpl_vars["jsitem"] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars["file"] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('__media')->value['js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars["jsitem"]->key => $_smarty_tpl->tpl_vars["jsitem"]->value){
 $_smarty_tpl->tpl_vars["file"]->value = $_smarty_tpl->tpl_vars["jsitem"]->key;
?><?php if ($_smarty_tpl->getVariable('jsitem')->value['join']){?><?php $_smarty_tpl->tpl_vars["currentFile"] = new Smarty_variable($_smarty_tpl->getVariable('file')->value, null, null);?><?php $_smarty_tpl->tpl_vars["external"] = new Smarty_variable(($_smarty_tpl->getVariable('external')->value).($_smarty_tpl->getVariable('currentFile')->value).",", null, null);?><?php }else{ ?><?php $_template = new Smarty_Internal_Template($_smarty_tpl->getVariable('jsitem')->value['tpl'], $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('filename',$_smarty_tpl->getVariable('file')->value); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?><?php }?><?php }} ?><?php if ($_smarty_tpl->getVariable('external')->value){?><script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/external.php?type=js&amp;files=<?php echo substr($_smarty_tpl->getVariable('external')->value,0,-1);?>
"></script><?php }?>
<?php }?>