<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 20.10.15
 * Time: 5:56
 */
namespace FractalBasic\Inventory;

class InitStartMethodDto
{
    /**
     * @var string
     */
    protected $shutDownArg;

    /**
     * @return string
     */
    public function getShutDownArg()
    {
        return $this->shutDownArg;
    }

    /**
     * @param string $shutDownArg
     */
    public function setShutDownArg($shutDownArg)
    {
        $this->shutDownArg = $shutDownArg;
    }


}