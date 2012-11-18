<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/modules/admin/templates/generator/module.tpl $
 *
 * MZZ Content Management System (c) 2012
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: module.tpl 4245 2010-06-09 14:12:18Z bobr $
 */

/**
 * notebookModule
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookModule extends simpleModule
{
    protected $classes = array('notebook', 'notebookItem');
	protected $roles = array('auth');

	protected $version = '0.0.1';

	protected $icon = null;
	protected $moduleTitle = 'Записная книжка';	

	/**
     * Returns array of requirements or empty array if all ok
     *
     * @return array
     */
    public function checkRequirements()
    {
        return array();
    }
    
/*    public function getRoutes()
    {
    	return array(
    		array(
    			'etTerminal' => new requestRoute('etTerminal', array('module' => 'etTerminal', 'action' => 'view'))
    		),
    		array(),
    	);
    }*/
}
?>
