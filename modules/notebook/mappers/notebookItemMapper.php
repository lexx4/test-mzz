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

fileLoader::load('notebook/models/notebookItem');

/**
 * notebookItemMapper
 *
 * @package modules
 * @subpackage notebook
 * @version 0.0.1
 */
class notebookItemMapper extends mapper implements iACLMapper 
{
    /**
     * DomainObject class name
     *
     * @var string
     */
    protected $class = 'notebookItem';

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'notebook_notebookItem';

    /**
     * Map
     *
     * @var array
     */
    protected $map = array (
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
        'user_id' => 
        array (
            'accessor' => 'getUserId',
            'mutator' => 'setUserId',
            'type' => 'int',
            'range' => 
            array (
                0 => 0,
                1 => 4294967296,
            ),
        ),
        'name' => 
        array (
            'accessor' => 'getName',
            'mutator' => 'setName',
            'type' => 'varchar',
            'maxlength' => 255,
        ),
        'phone' => 
        array (
            'accessor' => 'getPhone',
            'mutator' => 'setPhone',
            'type' => 'varchar',
            'maxlength' => 255,
        ),
        'address' => 
        array (
            'accessor' => 'getAddress',
            'mutator' => 'setAddress',
            'type' => 'varchar',
            'maxlength' => 255,
        ),
        'age' => 
        array (
            'accessor' => 'getAge',
            'mutator' => 'setAge',
            'type' => 'int',
            'range' => 
            array (
                0 => 0,
                1 => 4294967296,
            ),
        ),
        'date_created' => 
        array (
            'accessor' => 'getDateCreated',
            'mutator' => 'setDateCreated',
            'type' => 'int',
            'range' => 
            array (
                0 => 0,
                1 => 4294967296,
            ),
        ),
        'date_modified' => 
        array (
            'accessor' => 'getDateModified',
            'mutator' => 'setDateModified',
            'type' => 'int',
            'range' => 
            array (
                0 => 0,
                1 => 4294967296,
            ),
        ),
        'user' => array(
        	'accessor' => 'getUser',
        	'options' => array(
        		'fake','ro'
        	),
        	'relation' => 'one',
        	'mapper' => 'user/user',
        	'local_key' => 'user_id',
        	'foreign_key' => 'id' 
        ),
    );
    
    public function __construct($module)
    {
    	parent::__construct($module);
    	$this->plugins('jip');
    }
    
    public function preInsert(array & $data)
    {
    	$data['user_id'] = systemToolkit::getInstance()->getUser()->getId();
    	$data['date_created'] = time();
    }
    
	public function preUpdate(&$data)
    {
		if(is_object($data)){
			$data->setDateModified(time());
		}
    }
    
    public function convertArgsToObj(array $args){
    	if($args['id']){
    		return $this->searchByKey($args['id']);
    	}
    	return $this->create();
    }
    
}

?>