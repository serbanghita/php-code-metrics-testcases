<?php
namespace TestCases;

abstract class AbstractClass implements InterfaceForAbstractClass
{
    protected $port;

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getPort()
    {
        return $this->port;
    }
}