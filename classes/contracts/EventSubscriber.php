<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\Contracts;

use October\Rain\Events\Dispatcher;

/**
 * Interface EventSubscriber
 *
 * @package Vdlp\EventLogsExtension\Classes\Contracts
 */
interface EventSubscriber
{
    /**
     * @param Dispatcher $dispatcher
     */
    public function subscribe(Dispatcher $dispatcher);
}
