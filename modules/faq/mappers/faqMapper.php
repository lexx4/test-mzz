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

fileLoader::load('faq/models/faq');

/**
 * faqMapper
 *
 * @package modules
 * @subpackage faq
 * @version 0.0.1
 */
class faqMapper extends mapper
{
    /**
     * DomainObject class name
     *
     * @var string
     */
    protected $class = 'faq';

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
    protected $map = array();
}

?>