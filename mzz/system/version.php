<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/version.php $
 *
 * MZZ Content Management System (c) 2005-2007
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: version.php 4490 2012-05-23 05:57:59Z striker $
 */

// Name
define('MZZ_NAME',  'Mzz.Framework' );

// Major version
define('MZZ_VERSION_MAJOR', 1);

// Minor version
define('MZZ_VERSION_MINOR', 0);

// Micro version
define('MZZ_VERSION_MICRO', 0);

// Status
define('MZZ_VERSION_STATUS', '-beta');

// Full version
define('MZZ_VERSION', MZZ_VERSION_MAJOR . '.' . MZZ_VERSION_MINOR . '.' .
                      MZZ_VERSION_MICRO . MZZ_VERSION_STATUS);

// Revision
$revision = 'release';
if(DEBUG_MODE && file_exists(systemConfig::$pathToSystem . '/../.svn/entries')) {
    $svn_entries = file_get_contents(systemConfig::$pathToSystem . '/../.svn/entries');

    if (strpos($svn_entries, '<?xml') !== false) {
        preg_match('/revision="(\d+)"/', $svn_entries, $matches);
        $revision = $matches[1];
    } else {
        $svn_entries = explode("\x0a", $svn_entries, 5);
        if (isset($svn_entries[3])) {
            $revision = trim($svn_entries[3]);
        }
    }
}

define('MZZ_REVISION', $revision);

// Url
define('MZZ_URL', 'http://www.mzz.ru');

?>