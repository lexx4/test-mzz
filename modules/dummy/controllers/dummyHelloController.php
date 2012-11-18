<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/apps/dummy/trunk/modules/dummy/controllers/dummyHelloController.php $
 *
 * MZZ Content Management System (c) 2009
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: dummyHelloController.php 4198 2010-04-12 06:23:28Z desperado $
 */

/**
 * dummyHelloController
 *
 * @package modules
 * @subpackage dummy
 * @version 0.0.1
 */
class dummyHelloController extends simpleController
{
    protected function getView()
    {
        $this->view->assign('path_to_app', systemConfig::$pathToApplication);
        return $this->render('dummy/hello.tpl');
    }
}
?>