<?php
namespace PHPBI\Command\PHPTokenStream;

class MyClass
{
    protected $config;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        // This
        // is
        // My
        // config
        
        $this->config = $config;
    }
    
    public function test()
    {
        if (!isset($this->config['name'])) {
            $this->config['name'] = 'Serban';
        }
        
        if (!isset($this->config['email'])) {
            $this->config['email'] = 'sg@avangate.com';
        } else {
            $this->config['email'] = trim($this->config['email']);
        }
    }
    
    public function setConfig(array $config)
    {
        $this->config = $config;
        return $this;
    }
}