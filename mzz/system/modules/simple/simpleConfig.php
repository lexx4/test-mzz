<?php

/**
 * $URL: svn://svn.mzz.ru/mzz/trunk/system/modules/simple/simpleConfig.php $
 *
 * MZZ Content Management System (c) 2006
 * Website : http://www.mzz.ru
 *
 * This program is free software and released under
 * the GNU/GPL License (See /docs/GPL.txt).
 *
 * @link http://www.mzz.ru
 * @version $Id: simpleConfig.php 4465 2012-01-09 18:58:43Z bobr $
 */
class simpleConfig
{

    protected $moduleName = null;
    protected $configFile = false;
    protected $defaultFile = false;
    protected $data = array();
    protected $defaults = null;
    protected $isLoaded = false;
    protected $isChanged = false;
    protected $isDefault = false;
    protected $search = array('{$pathToApplication}', '{$pathToWebRoot}', '{$pathToTemp}', '{$pathToConfigs}', '{SITE_PATH}', '{SYSTEM_PATH}', '{DIRECTORY_SEPARATOR}');
    protected $replace = array();

    /**
     * Constructor of class
     * 
     * @param string $config file name
     */
    public function __construct($moduleName)
    {
        $this->moduleName = $moduleName;
        $this->configFile = systemConfig::$pathToConfigs . DIRECTORY_SEPARATOR . $this->moduleName . '.php';
        $this->defaultFile = fileLoader::resolve($this->moduleName . '/defaultConfig');
        $this->replace = array(systemConfig::$pathToApplication, systemConfig::$pathToWebRoot, systemConfig::$pathToTemp, systemConfig::$pathToConfigs, SITE_PATH, SYSTEM_PATH, DIRECTORY_SEPARATOR);
    }

    /**
     *  Set value for key
     *
     * @param string|integer $key
     * @param mixed $val
     */
    public function set($key, $val)
    {
        if (!is_scalar($key)) {
            throw new mzzInvalidParameterException("Key is not scalar", $key);
        }

        if (!$this->isLoaded) {
            $this->reload();
        }


        $this->data[$key] = $val;
        $this->isChanged = true;
    }

    /**
     * Return value for a key or default value
     *
     * @param string|integer $key
     * @param mixed $default value if key does not exists
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if (!is_scalar($key)) {
            throw new mzzInvalidParameterException("Key is not scalar", $key);
        }

        if (!$this->isLoaded) {
            $this->reload();
        }

        return isset($this->data[$key]) ? $this->replace($this->data[$key]) : $default;
    }

    /**
     * Return raw value for a key or default value
     *
     * @param string|integer $key
     * @param mixed $default value if key does not exists
     * @return mixed
     */
    public function getRaw($key, $default = null)
    {
        if (!is_scalar($key)) {
            throw new mzzInvalidParameterException("Key is not scalar", $key);
        }

        if (!$this->isLoaded) {
            $this->reload();
        }

        return isset($this->data[$key]) ? $this->data[$key] : $default;
    }

    /**
     * Check whether key exists
     *
     * @param string|integer $key
     * @return boolean
     */
    public function exists($key)
    {
        if (!is_scalar($key)) {
            throw new mzzInvalidParameterException("Key is not scalar", $key);
        }

        if (!$this->isLoaded) {
            $this->reload();
        }

        return isset($this->data[$key]);
    }

    /**
     * Unset the key
     *
     * @param string|integer $key
     */
    public function delete($key)
    {
        if (!is_scalar($key)) {
            throw new mzzInvalidParameterException("Key is not scalar", $key);
        }

        if (!$this->isLoaded) {
            $this->reload();
        }

        unset($this->data[$key]);
        $this->isChanged = true;
    }

    /**
     * Import array of values
     *
     * @param array $data to import
     * @param boolean $merge to merge exists data with new one
     */
    public function import(array $data, $merge = false)
    {
        if (!$this->isLoaded) {
            $this->reload();
        }

        $this->data = ($merge) ? array_merge($this->data, $data) : $data;
        $this->isChanged = true;
    }

    /**
     * Return config data
     *
     * @return array
     */
    public function export()
    {
        if (!$this->isLoaded) {
            $this->reload();
        }

        $data = array();
        foreach (array_keys($this->data) as $key) {
            $data[$key] = $this->replace($this->data[$key]);
        }

        return $data;
    }

    /**
     * Return raw config data
     *
     * @return array
     */
    public function exportRaw()
    {
        if (!$this->isLoaded) {
            $this->reload();
        }

        return $this->data;
    }

    /**
     * Save config file
     */
    public function save()
    {
        if ($this->isChanged) {
            if ((is_file($this->configFile) && is_writable($this->configFile)) ||
                    (!file_exists($this->configFile) && is_writable(systemConfig::$pathToTemp))) {
                $data = $this->data;
                file_put_contents($this->configFile, "<?php \n return " . var_export($data, true) . ";\n ?>");
                $this->isChanged = false;
                return true;
            } else {
                throw new mzzIoException($this->configFile);
            }
        }
    }

    /**
     * Reload config file
     */
    public function reload()
    {
        if (file_exists($this->configFile)) {
            if (is_file($this->configFile) && is_readable($this->configFile)) {
                $data = include $this->configFile;

                if (is_array($data)) {

                    $this->data = $data;

                    if (filemtime($this->defaultFile) > filemtime($this->configFile)) {
                        $this->merge();
                    }

                    $this->isLoaded = true;
                    $this->isChanged = false;

                    return true;
                }
            } else {
                throw new mzzIoException($this->configFile);
            }
        }

        $this->data = $this->getDefaults();

        $this->isLoaded = true;
        $this->isDefault = true;
        $this->isChanged = false;
    }

    /**
     * Merge and save old config with new default
     *
     */
    protected function merge()
    {
        $defaults = $this->getDefaults();
        foreach (array_keys($this->data) as $key) {
            if (!isset($defaults[$key])) {
                unset($this->data[$key]);
            }
        }

        $this->data = array_merge($defaults, $this->data);
        $this->isChanged = true;
        $this->save();
    }

    /**
     * Load defaultConfig file and returns array;
     *
     * @throws mzzInvalidParameterException|mzzIoException
     * @return array
     */
    public function getDefaults()
    {
        if ($this->defaults === null) {
            if (is_file($this->defaultFile) && is_readable($this->defaultFile)) {
                $data = include $this->defaultFile;

                if (!is_array($data)) {
                    throw new mzzInvalidParameterException('no array found in "' . $this->moduleName . '/defaultConfig" file');
                }

                $this->defaults = $data;
            } else {
                throw new mzzIoException($this->moduleName . DIRECTORY_SEPARATOR . 'defaultConfig.php');
            }
        }

        return $this->defaults;
    }

    /**
     * Whether config changed
     *
     * @return boolean
     */
    public function isChanged()
    {
        return (bool) $this->isChanged;
    }

    /**
     * Whether default config used
     *
     * @return boolean
     */
    public function isDefault()
    {
        return (bool) $this->isDefault;
    }

    /**
     * Replace keywords in strings for scalar data
     *
     * @param mixed $data
     * @return mixed
     */
    public function replace($data)
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $data[$key] = $this->replace($value);
            }
        }
        
        return (is_scalar($data)) ? str_replace($this->search, $this->replace, $data) : $data;
    }

}
?>