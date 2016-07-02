<?php
/**
 * Created by PhpStorm.
 * User: nms
 * Date: 02.07.16
 * Time: 19:56
 */
namespace FractalBasic\Inventory\Abstracts;

use FractalBasic\Inventory\InitStartMethodDto;
use Monolog\Logger;

class BaseModule
{
    /**
     * @var BaseModuleDto
     */
    protected $moduleDto;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @var string
     */
    protected $loggerPostfix;

    /**
     * @return null
     */
    public function initLoggers()
    {
        $this->logger = $this->moduleDto->getLogger();
        $this->loggerPostfix = $this->moduleDto->getLoggerPostfix();

        return null;
    }

    /**
     * @param null $logLevel
     * @return null
     */
    protected function registerShutDown($logLevel = null)
    {
        register_shutdown_function([$this, 'shutDown'], $logLevel);

        return null;
    }

    /**
     * @param null $logLevel
     * @return null
     */
    public function shutDown($logLevel = null)
    {
        $msg = $this->loggerPostfix . " was stopped.";

        if ($logLevel) {
            $this->logger->{$logLevel}($msg);
        } else {
            $this->logger->info($msg);
        }

        return null;
    }

    /**
     * @param InitStartMethodDto
     * @return null
     */
    protected function initStartMethods(InitStartMethodDto $initDto = null)
    {
        $this->initLoggers();
        $this->registerShutDown(($initDto) ? $initDto->getShutDownArg() : null);

        return null;
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

    /**
     * @return mixed
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param mixed $logger
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }


}