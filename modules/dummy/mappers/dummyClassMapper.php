<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/apps/dummy/trunk/modules/dummy/mappers/dummyClassMapper.php $
 *
 * MZZ Content Management System (c) 2009
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU Lesser General Public License (See /docs/LGPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: dummyClassMapper.php 3823 2009-10-16 00:57:47Z striker $
 */

fileLoader::load('dummy/models/dummyClass');

/**
 * dummyClassMapper
 *
 * @package modules
 * @subpackage dummy
 * @version 0.0.1
 */
class dummyClassMapper extends mapper
{
    /**
     * DomainObject class name
     *
     * @var string
     */
    protected $class = 'dummyClass';

    /**
     * Table name
     *
     * @var string
     */
    protected $table = 'dummy_table';

    /**
     * Map
     *
     * @var array
     */
    protected $map = array();
}

?>