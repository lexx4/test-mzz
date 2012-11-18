{{*<?*}}{{chr(60)}}?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/modules/admin/templates/generator/controller.view.tpl $
 *
 * MZZ Content Management System (c) {{"Y"|date}}
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: controller.view.tpl 4201 2010-04-12 11:27:49Z desperado $
 */

/**
 * {{$module->getName()}}{{$actionData.controller|ucfirst}}Controller
 *
 * @package modules
 * @subpackage {{$module->getName()}}
 * @version 0.0.1
 */
class {{$module->getName()}}{{$actionData.controller|ucfirst}}Controller extends simpleController
{
    protected function getView()
    {
        ${{$name}}Mapper = $this->toolkit->getMapper('{{$module->getName()}}', '{{$name}}');

        $id = $this->request->getInteger('id');
        ${{$name}} = ${{$name}}Mapper->searchByKey($id);

        if (empty(${{$name}})) {
            return $this->forward404(${{$name}}Mapper);
        }

        $this->view->assign('{{$name}}', ${{$name}});

        return $this->render('{{$module->getName()}}/{{$action_name}}.tpl');
    }
}

?>