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
 * notebookSaveController
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookSaveController extends simpleController
{
    protected function getView()
    {
    	//получаем маппер
    	$notebookItemMapper = $this->toolkit->getMapper('notebook','notebookItem');
    	
    	//проверяем текущий экшн
    	if($this->getAction() == 'add'){
    		$notebookItem = $notebookItemMapper->create(); 
    	} else {
    		$notebookItem = $notebookItemMapper->searchByKey($this->request->getInteger('id'));

    		$is_edit = true;
    	}
    	
    	//проверка наличия редактируемого объекта
    	if(empty($notebookItem)){
    		return $this->forward404();
    	}
    	
    	//Валидатор и правила валидации
    	$validator = new formValidator();
    	$validator->rule('required', 'name', 'Обязательное для заполнения поле');
    	$validator->rule('required', 'phone', 'Обязательное для заполнения поле');
    	$validator->rule('regex', 'phone', 'Не верный формат данных', '!\A\d+\Z!');
    	$validator->rule('regex', 'age', 'Не верный формат данных', '!\A\d+\Z!');
    	$validator->rule('range', 'age', 'Возраст должен быть от 1 до 200', array(1,200));
    	
    	if($validator->validate()){
    		//получаем данные из формы
    		$name = $this->request->getString('name', SC_POST); 
    		$phone = $this->request->getString('phone', SC_POST);
    		$address = $this->request->getString('address', SC_POST);
    		$age = $this->request->getString('age', SC_POST); 
    		
    		//заносим данные в Доменный Объект(ДО)
    		$notebookItem->setName($name);
    		$notebookItem->setPhone($phone);
    		$notebookItem->setAddress($address);
    		$notebookItem->setAge($age);
    		
    		$notebookItemMapper->save($notebookItem);
    		
    		return jipTools::refresh();
    	}
    	
    	//передаем объекты в шаблон
    	$this->view->assign('validator', $validator);
    	$this->view->assign('notebookItem', $notebookItem);
    	
        return $this->render('notebook/add.tpl');
    }
}
?>