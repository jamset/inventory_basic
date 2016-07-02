<?php
/**
 * Created by PhpStorm.
 * User: nms
 * Date: 02.07.16
 * Time: 19:57
 */
namespace FractalBasic\Inventory\Abstracts;

use Monolog\Logger;

class BaseModuleDto
{
    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $moduleName;

    /**
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * @param string $moduleName
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;
    }

    /**
     * @return Logger
     */
    public function getLogger()
    {
        return ($this->logger) ?: new Logger($this->moduleName . "| Default logger");
    }

    /**
     * @param Logger $logger
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function getLoggerPostfix()
    {
        return " | " . ($this->moduleName) ?: "module-name-doesn't-set";
    }


}