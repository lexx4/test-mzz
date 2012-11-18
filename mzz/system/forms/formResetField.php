<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/forms/formResetField.php $
 *
 * MZZ Content Management System (c) 2005-2007
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: formResetField.php 4497 2012-09-29 10:30:26Z bobr $
 */

/**
 * formResetField: reset
 *
 * @package system
 * @subpackage forms
 * @version 0.1
 */
class formResetField extends formElement
{
    public function __construct()
    {
        $this->setAttribute('type', 'reset');
        $this->setAttribute('name', '');
        $this->setAttribute('value', '');
        $this->addOptions(array('jip'));
    }

    public function render($attributes = array(), $value = null)
    {
        if (isset($attributes['jip']) && $attributes['jip']) {
            $attributes['onclick'] = (empty($attributes['onclick']) ? 'javascript:' : $attributes['onclick']) . ' jipWindow.close();';
        }

        return $this->renderTag('input', $attributes);
    }
}

?>