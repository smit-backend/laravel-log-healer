<?php

declare(strict_types=1);

namespace SmitBackend\LogHealer\Contracts;

/**
 * Interface FixGeneratorInterface
 *
 * @package SmitBackend\LogHealer
 */
interface FixGeneratorInterface
{
    public function execute(array $payload = []): mixed;
}
