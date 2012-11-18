<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:09
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\main\adminPager.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1443250a8f7f90b9ae3-92262016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3de0e5e4d8f9783b59440d4d54d2c98402dd763f' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\main\\adminPager.tpl',
      1 => 1227676420,
    ),
  ),
  'nocache_hash' => '1443250a8f7f90b9ae3-92262016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('pager')->value->getPagesTotal()>1){?>
    <?php if (!is_null($_smarty_tpl->getVariable('pager')->value->getPrev())){?><a href="<?php echo $_smarty_tpl->getVariable('pager')->value->getPrev();?>
">Предыдущая</a><?php }else{ ?>Предыдущая<?php }?>
    <?php  $_smarty_tpl->tpl_vars['current'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pages')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['current']->key => $_smarty_tpl->tpl_vars['current']->value){
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['current']->value['skip'])){?>...<?php }elseif(!empty($_smarty_tpl->tpl_vars['current']->value['current'])){?>&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['current']->value['page'];?>
</strong>&nbsp;<?php }else{ ?>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['current']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['current']->value['page'];?>
</a>&nbsp;<?php }?>
    <?php }} ?>
    <?php if (!is_null($_smarty_tpl->getVariable('pager')->value->getNext())){?><a href="<?php echo $_smarty_tpl->getVariable('pager')->value->getNext();?>
">Следующая</a><?php }else{ ?>Следующая<?php }?>
<?php }?>