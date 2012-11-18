<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/template/plugins/loadPlugin.php $
 *
 * MZZ Content Management System (c) 2010
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @package system
 * @subpackage template
 * @version $Id: loadPlugin.php 4473 2012-02-22 11:10:51Z bobr $
 */

fileLoader::load('template/plugins/aPlugin');
fileLoader::load('service/blockHelper');

/**
 * Unified load plugin
 *
 * @package system
 * @subpackage template
 * @version 0.1.0
 */
class loadPlugin extends aPlugin
{
    public function run(array $params)
    {
        $params = new arrayDataspace($params);

        $module = $params['module'];
        $action = $params['action'];
        $block = $params['_block'];
        $blockName = $params['_blockName'];

        $blockHelper = blockHelper::getInstance();
        if ($block && $blockHelper->isHidden($blockName)) {
            // loading this action of this module has been disabled by blockHelper
            return null;
        }

        $view = loadDispatcher::dispatch($module, $action, $params['params']);

        // отдаём контент в вызывающий шаблон, либо сохраняем его в blockHelper
        if ($block) {
            $blockHelper->set($blockName, $block, $view);
        } else {
            return $view;
        }
    }
}
?>