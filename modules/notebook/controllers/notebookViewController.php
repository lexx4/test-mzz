<?php
/**
 * $URL: svn://svn.subversion.ru/usr/local/svn/mzz/trunk/system/codegenerator/templates/controller.tpl $
 *
 * MZZ Content Management System (c) 2012
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: controller.tpl 2200 2007-12-06 06:52:05Z zerkms $
 */

/**
 * notebookViewController
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookViewController extends simpleController
{
    protected function getView()
    {
    	//получаем мапперы
    	$notebookItemMapper = $this->toolkit->getMapper('notebook','notebookItem');

    	//получаем коллекцию объектов
    	$notebookItem = $notebookItemMapper->searchByKey($this->request->getInteger('id'));
    	
    	//передаём данные в шаблон
    	$this->view->assign('notebookItem', $notebookItem);
    	
    	return $this->render('notebook/view.tpl');
    }
}
?>