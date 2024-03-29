<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/systemConfig.php $
 *
 * MZZ Content Management System (c) 2005-2007
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: systemConfig.php 4452 2011-11-28 09:22:32Z bobr $
 */

/**
 * systemConfig: статический класс для хранения путей
 *
 * @package system
 * @version 0.2.2
 */
class systemConfig
{
    /**
     * Двумерный массив с данными для соединения с одной или несколькими БД
     * Необходимы как минимум данные для одного соединения с алиасом 'default'
     * Ключем массива является алиас соединения, значение - массив с данными, где
     * ключи: driver, dbDsn, dbUser, dbPassword, dbCharset, pdoOptions
     *
     * @var array
     * @see DB::factory()
     */
    public static $db;

    /**
     * Многомерный массив с данными для кэширования
     * Необходимы как минимум данные для одного способа кэширования с алиасом 'default'
     * Ключем массива является алиас способа кэширования, значение - массив с данными, где
     * ключи: driver (имя драйвера) и params (ассоциативный массив с параметрами конкретного способа кэширования)
     *
     * @var array
     * @see cache::factory()
     */
    public static $cache;

    /**
     * Многомерный массив с данными для отправки почты
     * Необходимы как минимум данные для одного способа отправки почты с алиасом 'default'
     * Ключем массива является алиас способа отправки почты, значение - массив с данными, где
     * ключи: driver (имя драйвера) и params (ассоциативный массив с параметрами конкретного способа кэширования)
     *
     * @var array
     * @see mailer::factory()
     */
    public static $mailer;

    /**
     * Name of the app
     *
     * @var string
     */
    public static $appName;

    /**
     * Version of the app
     *
     * @var string
     */
    public static $appVersion;

    /**
     * Array with enabled modules
     *
     * @var array
     */
    public static $enabledModules = array();

    /**
     * Path to the app
     *
     * @var string
     */
    public static $pathToApplication;

    /**
     * Path to the web-root
     *
     * @var string
     */
    public static $pathToWebRoot;

    /**
     * Path to the system files
     *
     * @var string
     */
    public static $pathToSystem;

    /**
     * Path to the temp
     *
     * @var string
     */
    public static $pathToTemp;

    /**
     * Путь до файлов с конфигурацией модулей
     *
     * @var string
     */
    public static $pathToConfigs;

    /**
     * Path to the tests
     *
     * @var string
     */
    public static $pathToTests;

    /**
     * Default site language
     *
     * @var string
     */
    public static $i18n = 'en';

    /**
     * Enable multilingual app
     *
     * @var boolean
     */
    public static $i18nEnable = false;
    
    /**
     * Enable exceptions logging to web server error_log
     *
     * @var boolean
     */
    public static $logExceptions = false;

    /**
     * id of default skin
     *
     * @var integer
     */
    public static $defaultSkin = 1;

    /**
     * Internal driver for templates. Used with system main templates
     *
     * @var string
     */
    public static $internalTemplateDriver = 'smarty';

    /**
     * Default driver for templates. Used for main.tpl, header.tpl and other main templates
     *
     * @var string
     */
    public static $defaultTemplateDriver = 'smarty';

    /**
     * Name of session storage driver
     *
     * @var string
     */
    public static $sessionStorageDriver = null;

    /**
     * Array for storing application's settings
     *
     * @var array
     */
    public static $application = array();

    /**
     * Detects and sets path to the core
     *
     */
    public static function init()
    {
        self::$pathToSystem = dirname(__FILE__);
        self::$pathToApplication = realpath(self::$pathToApplication);
        self::$pathToWebRoot = realpath(self::$pathToWebRoot);
        self::$pathToTemp = realpath(self::$pathToTemp);
        self::$pathToConfigs = realpath(self::$pathToConfigs);

        if (!isset(self::$cache['fast'])) {
            self::$cache['fast'] = array(
                'backend' => 'file',
                'params' => array(
                    'path' => systemConfig::$pathToTemp . DIRECTORY_SEPARATOR . 'cache',
                    'prefix' => 'fast_',
                    'expire' => 180));
        }

        if (!isset(self::$cache['session'])) {
            self::$cache['session'] = array(
                'backend' => 'session',
                'params' => array(
                    'expire' => 1800));
        }

        if (!isset(self::$cache['long'])) {
            self::$cache['long'] = array(
                'backend' => 'file',
                'params' => array(
                    'path' => systemConfig::$pathToTemp . DIRECTORY_SEPARATOR . 'cache',
                    'prefix' => 'long_',
                    'expire' => 86400));
        }

        if (!isset(self::$cache['memory'])) {
            self::$cache['memory'] = array(
                'backend' => 'memory');
        }

        if (!isset(self::$cache['default'])) {
            self::$cache['default'] = self::$cache['fast'];
        }
    }
}

?>