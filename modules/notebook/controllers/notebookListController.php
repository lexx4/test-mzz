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
 * notebookListController
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookListController extends simpleController
{
    protected function getView()
    {
    	//получаем мапперы
    	$notebookItemMapper = $this->toolkit->getMapper('notebook','notebookItem');
    	$notebookMapper = $this->toolkit->getMapper('notebook','notebook');
    	
    	//получаем данные о текущем пользователе
    	$user = $this->toolkit->getUser();
    	
    	//составляем критерию выборки
    	$criteria = new Criteria();
    	$criteria->where('user_id',$user->getId(),'=');
    	
    	//получаем коллекцию объектов
    	$notebookItems = $notebookItemMapper->searchAllByCriteria($criteria);
    	
    	//передаём данные в шаблон
    	$this->view->assign('notebookItems',$notebookItems);
    	$this->view->assign('notebook',$notebookMapper->create());
    	
        return $this->render('notebook/list.tpl');
    }
}
?>