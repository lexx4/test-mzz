<?php /* Smarty version Smarty3rc4, created on 2012-11-18 18:59:34
         compiled from "D:\_develop\AppServ\www\notebook.loc\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58050a8f7d67c6331-93629957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea2844ba43e79c0e54db10ccdf6fc4827e9e1e1' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\templates\\main.tpl',
      1 => 1255669738,
    ),
  ),
  'nocache_hash' => '58050a8f7d67c6331-93629957',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div id="wrapper">
    <div id="header">
        <a href="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/" rel="homepage"><img src="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/images/logo.gif" alt="logo" /></a>
	</div>

	<div id="content">
        <?php echo $_smarty_tpl->getVariable('content')->value;?>

    </div>
</div>

<div id="footer-wrapper">
    <div id="footer">
        <p><?php echo $_smarty_tpl->getVariable('timer')->value->toString();?>
</p>
        <p><b><?php echo @MZZ_NAME;?>
 v.<?php echo @MZZ_VERSION;?>
-<?php echo @MZZ_REVISION;?>
 &copy; <?php echo date("Y");?>
</b></p>
    </div>
</div>