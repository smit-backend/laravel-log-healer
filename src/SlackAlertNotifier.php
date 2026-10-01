<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Broadcast AI diagnostic cards with diffs to Slack
 */
class SlackAlertNotifier
{
    public function optimize(): bool
    {
        return true;
    }
}
