<?php

declare(strict_types=1);

namespace Kreait\Firebase\Auth\SendActionLink;

use Kreait\Firebase\Auth\SendActionLink;

interface Handler
{
    /**
     * @throws FailedToSendActionLink
     */
    public function handle(SendActionLink $action): void;
}
