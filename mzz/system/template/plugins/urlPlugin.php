<?php
/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/template/plugins/urlPlugin.php $
 *
 * MZZ Content Management System (c) 2010
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @package system
 * @subpackage template
 * @version $Id: urlPlugin.php 4494 2012-08-16 19:50:29Z bobr $
 */

fileLoader::load('template/plugins/aPlugin');

/**
 * Plugin for generating url's
 *
 * @package system
 * @subpackage template
 * @version 0.1.0
 */
class urlPlugin extends aPlugin
{
    public function run(array $params)
    {
        $toolkit = systemToolkit::getInstance();
        $request = $toolkit->getRequest();

        if (!empty($params['current'])) {
            return $request->getRequestUrl();
        }

        $appendGet = false;
        if (isset($params['appendGet'])) {
            $appendGet = !empty($params['appendGet']);
            unset($params['appendGet']);
        }

        if (!isset($params['route'])) {
            try {
                $route = $toolkit->getRouter()->getCurrentRoute();
            } catch (mzzNoRouteException $e) {
                $route = $toolkit->getRouter()->getDefaultRoute();
            }
            
            $params = $params + $request->getParams();
            $params['action'] = $request->getAction();
            $params['module'] = $request->getModule();
            
            $params['route'] = $route->getName();
        }

        $onlyPath = false;
        if (isset($params['onlyPath'])){
            $onlyPath = true;
            unset($params['onlyPath']);
        }

        if (!empty($params['_csrf'])) {
            $params['_csrf'] = form::getCSRFToken();
        }

        $url = new url($params['route']);
        unset($params['route']);

        if ($appendGet) {
            foreach ($request->exportGet() as $get_key => $get_value) {
                $url->add($get_key, $get_value, true);
            }
        }

        foreach ($params as $name => $value) {
            if ($isGet = $name[0] == '_') {
                $name = substr($name, 1);
            }
            $url->add($name, $value, $isGet);
        }

        if ($onlyPath) {
            $url->disableAddress();
        }

        if (isset($params['lang'])){
            try {
                $finishedUrl = $url->get();
            } catch (mzzRuntimeException $e) {
                // it was wrong route, now try the default one
                $url->setRoute($toolkit->getRouter()->getDefaultRoute()->getName());
                $finishedUrl = $url->get();
            }
            return $finishedUrl;
        }

        $url = $url->get(!empty($params['encode']));

        if (!empty($params['escape'])) {
            $url = htmlspecialchars($url);
        }

        if (!empty($params['combine_slashes'])) {
            $url = preg_replace('#(?<!:)//+#','/',$url);
        }

        return $url;
    }
}
?>