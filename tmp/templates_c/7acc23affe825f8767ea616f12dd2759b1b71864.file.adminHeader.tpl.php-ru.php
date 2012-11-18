<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:04
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\main\adminHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2964050a8f7f45d6068-25873584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7acc23affe825f8767ea616f12dd2759b1b71864' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\main\\adminHeader.tpl',
      1 => 1268230124,
    ),
  ),
  'nocache_hash' => '2964050a8f7f45d6068-25873584',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_title')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.title.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Офис администратора <?php echo smarty_function_title(array('separator'=>" | ",'start'=>" - "),$_smarty_tpl->smarty,$_smarty_tpl);?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="generator" content="<?php echo @MZZ_NAME;?>
 v.<?php echo @MZZ_VERSION;?>
-<?php echo @MZZ_REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/css/admin/adm.css" />
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

    <?php $_template = new Smarty_Internal_Template('include.external.js.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

    <script type="text/javascript">
    //<!--
        MZZ.tools.zebra('table.admin');
    //-->
    </script>
</head>
<body>
<?php echo $_smarty_tpl->getVariable('content')->value;?>

</body>
</html>