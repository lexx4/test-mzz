<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/modules/menu/controllers/menuSavemenuController.php $
 *
 * MZZ Content Management System (c) 2007
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: menuSavemenuController.php 4197 2010-04-12 06:22:25Z desperado $
 */

fileLoader::load('forms/validators/formValidator');

/**
 * menuSavemenuController: контроллер для метода create модуля menu
 *
 * @package modules
 * @subpackage menu
 * @version 0.1
 */

class menuSavemenuController extends simpleController
{
    protected function getView()
    {
        $menuMapper = $this->toolkit->getMapper('menu', 'menu');

        $action = $this->request->getAction();
        $isEdit = ($action == 'editmenu');

        $id = $this->request->getInteger('id');
        $menu = $isEdit ? $menuMapper->searchById($id) : $menuMapper->create();

        if (!$menu) {
            return $this->forward404($menuMapper);
        }

        $validator = new formValidator();
        $validator->rule('required', 'name', 'Необходимо указать имя');
        $validator->rule('regex', 'name', 'Недопустимые символы в имени', '/^[a-z0-9_]+$/i');
        $validator->rule('callback', 'name', 'Имя меню должно быть уникальным', array(array($this, 'checkName'), $menu, $menuMapper));

        if (!$validator->validate()) {
            $url = new url($isEdit ? 'withId' : 'default2');
            $url->setAction($action);
            if ($isEdit) {
                $url->add('id', $menu->getId());
            }

            $this->view->assign('menu', $menu);
            $this->view->assign('action', $url->get());
            $this->view->assign('validator', $validator);
            $this->view->assign('isEdit', $isEdit);
            return $this->render('menu/savemenu.tpl');
        } else {
            $name = $this->request->getString('name', SC_POST);

            $menu->setName($name);

            $menuMapper->save($menu);
            return jipTools::redirect();
        }
    }

    public function checkName($name, $menu, mapper $menuMapper)
    {
        if ($name == $menu->getName()) {
            return true;
        }

        $criteria = new criteria();
        $criteria->where('name', $name);
        return is_null($menuMapper->searchOneByCriteria($criteria));
    }
}

?>