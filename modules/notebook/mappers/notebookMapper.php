<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/modules/admin/templates/generator/mapper.tpl $
 *
 * MZZ Content Management System (c) 2012
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: mapper.tpl 4004 2009-11-24 00:10:39Z mz $
 */

fileLoader::load('notebook/models/notebook');

/**
 * notebookMapper
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookMapper extends mapper
{
    /**
     * DomainObject class name
     *
     * @var string
     */
    protected $class = 'notebook';

    /**
     * Table name
     *
     * @var string
     */
    protected $table = '';

    /**
     * Map
     *
     * @var array
     */
    protected $map = array(
	'id' => 
        array (
            'accessor' => 'getId',
            'mutator' => 'setId',
            'type' => 'int',
            'range' => 
            array (
                0 => 0,
                1 => 4294967296,
            ),
            'options' => 
            array (
                0 => 'pk',
                1 => 'once',
            ),
        ),
    );
    
    public function __construct($module)
    {
    	parent::__construct($module);
    	$this->plugins('jip');
    }
}

?>