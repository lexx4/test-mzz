<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/modules/admin/templates/generator/do.tpl $
 *
 * MZZ Content Management System (c) 2012
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: do.tpl 4004 2009-11-24 00:10:39Z mz $
 */

/**
 * notebookItem
 * generated with mzz scaffolding
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookItem extends entity implements iACL
{
	public function getAcl($action)
	{
		//получаем ID текущего пользователя
		$user = systemToolkit::getInstance()->getUser();
		if($user->getId() != $this->getUserId()){
			return false;
		}
		
		return null;
	}
}
?>