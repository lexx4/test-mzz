<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:34
         compiled from "D:\_develop\AppServ\www\notebook.loc/templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2774650a8f7d68f4855-41672680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064ba5feb2d935ee60133c6f62b1042298af4d61' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc/templates\\header.tpl',
      1 => 1255654667,
    ),
  ),
  'nocache_hash' => '2774650a8f7d68f4855-41672680',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_title')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.title.php';
if (!is_callable('smarty_function_meta')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.meta.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>mzz dummy project <?php echo smarty_function_title(array('separator'=>" | ",'start'=>" - "),$_smarty_tpl->smarty,$_smarty_tpl);?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="generator" content="<?php echo @MZZ_NAME;?>
 v.<?php echo @MZZ_VERSION;?>
-<?php echo @MZZ_REVISION;?>
" />
    <meta name="keywords" content="<?php echo smarty_function_meta(array('show'=>"keywords",'default'=>"mzz, dummy"),$_smarty_tpl->smarty,$_smarty_tpl);?>
"/>
    <meta name="description" content="<?php echo smarty_function_meta(array('show'=>"description",'default'=>"mzz dummy project"),$_smarty_tpl->smarty,$_smarty_tpl);?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/css/style.css" type="text/css" media="screen" />
    <!--[if lte IE 6]><link rel="stylesheet" href="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/css/style_ie.css" type="text/css" media="screen" /><![endif]-->
    <?php $_template = new Smarty_Internal_Template('include.css.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <script type="text/javascript">
    //<!--
    var SITE_PATH = '<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
';
    var SITE_LANG = '<?php echo $_smarty_tpl->getVariable('toolkit')->value->getLocale()->getName();?>
';
    //-->
    </script>
    <?php $_template = new Smarty_Internal_Template('include.js.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
</head>
<body>
<?php echo $_smarty_tpl->getVariable('content')->value;?>

</body>
</html>