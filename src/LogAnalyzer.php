<?php

declare(strict_types=1);

namespace SmitBackend\LogHealer;

use SmitBackend\LogHealer\Contracts\FixGeneratorInterface;

/**
 * Class LogAnalyzer
 *
 * @package SmitBackend\LogHealer
 */
class LogAnalyzer implements FixGeneratorInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
