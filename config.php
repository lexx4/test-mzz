<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/apps/dummy/trunk/config.php $
 *
 * MZZ Content Management System (c) 2005-2007
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: config.php 4453 2011-11-28 09:29:03Z bobr $
*/

/**
 * Абсолютный путь до сайта.
 * Если mzz установлен в корень веб-сервера, оставьте поле пустым
 * Правильно: /mzz, /new/site
 * Неправильно: site1, site1/, /site1/
 */
define('SITE_PATH', '');
define('COOKIE_DOMAIN', '');

define('DEBUG_MODE', true);

// Путь до директории system в mzz
define('SYSTEM_PATH', realpath(dirname(__FILE__) . '/mzz/system/'));

// Идентификатор записи в БД для неавторизированных пользователей
define('MZZ_USER_GUEST_ID', 1);

// Идентификатор группы, для которой ACL всегда будет возвращать true (т.е. предоставит полный доступ)
define('MZZ_ROOT_GID', 3);

require_once SYSTEM_PATH . DIRECTORY_SEPARATOR . 'systemConfig.php';

// Дефолтный язык приложения
systemConfig::$i18n = 'ru';

// Включаем мультиязычность
systemConfig::$i18nEnable = true;

// Устанавливаем дефолтную кодировку для выдачи
ini_set('default_charset', 'utf-8');

// Настройка соединения с БД приложения
systemConfig::$db['default']['driver'] = 'pdo';
systemConfig::$db['default']['dsn']  = 'mysql:host=localhost;dbname=mzz_notebook';
systemConfig::$db['default']['user'] = 'root';
systemConfig::$db['default']['password'] = '1';
systemConfig::$db['default']['options'] = array();
systemConfig::$db['default']['options']['init_query'] = 'SET NAMES utf8';

// Установка переменных окружения
systemConfig::$appName = 'demo';
systemConfig::$appVersion = '1.0-alpha';
systemConfig::$enabledModules = array('dummy','notebook');
systemConfig::$pathToApplication = dirname(__FILE__);
systemConfig::$pathToWebRoot = systemConfig::$pathToApplication . '/www';
systemConfig::$pathToTemp = systemConfig::$pathToApplication . '/tmp';
systemConfig::$pathToConfigs = systemConfig::$pathToApplication . '/configs';

// Настройка дефолтного мейлера
systemConfig::$mailer['default']['backend'] = 'PHPMailer';
systemConfig::$mailer['default']['params'] = array('html' => true, 'smtp' => true, 'smtp_host' => 'localhost');

// Логирование исключений в error_log (полезно в боевой эксплуатации)
systemConfig::$logExceptions = false;

/**
 * Здесь могут находиться другие системные настройки приложения, 
 * такие как настройки кеширования, шаблонизатора, сессий и др.
 */

systemConfig::init();

?>