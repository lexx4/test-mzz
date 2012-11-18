<?php /* Smarty version Smarty3rc4, created on 2012-11-18 19:00:04
         compiled from "D:\_develop\AppServ\www\notebook.loc\mzz\system\modules\admin\templates\main\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3131150a8f7f40e4794-73092867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '289d26b744fb3443d7d90d83d754c56663dbd91a' => 
    array (
      0 => 'D:\\_develop\\AppServ\\www\\notebook.loc\\mzz\\system\\modules\\admin\\templates\\main\\admin.tpl',
      1 => 1283247338,
    ),
  ),
  'nocache_hash' => '3131150a8f7f40e4794-73092867',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_add')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.add.php';
if (!is_callable('smarty_function_load')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.load.php';
if (!is_callable('smarty_function_url')) include 'D:\_develop\AppServ\www\notebook.loc\mzz\system/template/drivers/smarty/plugins\function.url.php';
?>
<?php echo smarty_function_add(array('file'=>"jip.css"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php echo smarty_function_add(array('file'=>"fileLoader.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php echo smarty_function_add(array('file'=>"jip/jipCore.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php echo smarty_function_add(array('file'=>"jip/jipMenu.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>

<?php echo smarty_function_add(array('file'=>"jip/jipWindow.js"),$_smarty_tpl->smarty,$_smarty_tpl);?>


      <div id="adminBody">
          <div id="adminHeader" class="clearfix">
              <h1>
                  <a href="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/" title="Visit Site"><?php echo $_smarty_tpl->getVariable('toolkit')->value->getRequest()->getUrl();?>
/</a>
              </h1>
              <div class="userInfo"><?php echo smarty_function_load(array('module'=>"user",'action'=>"login",'onlyForm'=>true,'tplPrefix'=>"admin/"),$_smarty_tpl->smarty,$_smarty_tpl);?>
</div>
          </div>
          <div id="adminWrap" class="clearfix">
              <div class="c-topLeft"></div>
              <div class="c-top"></div>
              <div class="c-topRight"></div>
              <div class="c-left"></div>
              <div class="c-right"></div>
              <div class="c-bottomLeft"></div>
              <div class="c-bottom"></div>
              <div class="c-bottomRight"></div>
              <div id="adminSidebar">
                <?php echo smarty_function_load(array('module'=>"admin",'action'=>"menu"),$_smarty_tpl->smarty,$_smarty_tpl);?>

              </div>
              <div id="adminPageWrap" class="clearfix">
                <div id="adminPage" class="clearfix">
                  <div class="c-topLeft"></div>
                  <div class="c-top"></div>
                  <div class="c-topRight"></div>
                  <div class="c-left"></div>
                  <div class="c-right"></div>
                  <div class="c-bottomLeft"></div>
                  <div class="c-bottom"></div>
                  <div class="c-bottomRight"></div>
                  <div style="position: absolute; top: -26px; right: 5px">
                    <a href="<?php echo smarty_function_url(array('route'=>'adminModule','name'=>$_smarty_tpl->getVariable('current_module')->value,'action'=>'config'),$_smarty_tpl->smarty,$_smarty_tpl);?>
" class="mzz-jip-link"><img class="mzz-icon mzz-icon-admin mzz-icon-admin-action" src="<?php echo $_smarty_tpl->getVariable('SITE_PATH')->value;?>
/images/spacer.gif" width="16" height="16" alt="" /></a>
                  </div>
                  <?php echo $_smarty_tpl->getVariable('content')->value;?>

                </div>
              </div>
          </div>
          <div id="adminFooter"><span style="float:left"><a href="http://www.mzz.ru/"><?php echo @MZZ_NAME;?>
</a> (v.<?php echo @MZZ_VERSION;?>
-<?php echo @MZZ_REVISION;?>
) 2005-<?php echo date("Y");?>
 | <a href="http://www.mzz.ru/docs/">Documentation</a> | <a href="http://trac.mzz.ru">Trac</a></span> <?php echo $_smarty_tpl->getVariable('timer')->value->toString('timer/admin/timer.tpl');?>
</div>
      </div>
