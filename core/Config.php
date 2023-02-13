<?php

namespace Core;

use Dotenv\Dotenv;

class Config extends Component
{
    private array $config;

    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(BASE_PATH);

        $this->config = $dotenv->load();
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}
