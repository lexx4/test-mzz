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
 * notebookDeleteController
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookDeleteController extends simpleController
{
    protected function getView()
    {
        //получаем маппер
    	$notebookItemMapper = $this->toolkit->getMapper('notebook','notebookItem');
    	
    	$notebookItem = $notebookItemMapper->searchByKey($this->request->getInteger('id'));

    	
    	//проверка наличия редактируемого объекта
    	if(empty($notebookItem)){
    		return $this->forward404();
    	}
    	
    	$notebookItemMapper->delete($notebookItem);
    	    	
        return jipTools::refresh();
    }
}
?>