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
    protected $loggerPostfix;

    /**
     * @var string
     */
    protected $moduleName;

    /**
     * @return Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param Logger $logger
     */
    public function setLogger($logger)
    {
        $this->logger = $logger;
    }

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
     * @return string
     */
    public function getLoggerPostfix()
    {
        return $this->loggerPostfix;
    }

    /**
     * @param string $loggerPostfix
     */
    public function setLoggerPostfix($loggerPostfix)
    {
        $this->loggerPostfix = $loggerPostfix;
    }


}