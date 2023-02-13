<?php

namespace Core;

class Application extends Component
{
    private Config $config;

    public function make(): static
    {
        $app = static::getInstance();

//        $app->setConfig(Config::getInstance());

        return $app;
    }

    public function run()
    {

    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function getConfig(): Config
    {
        return $this->config;
    }
}
