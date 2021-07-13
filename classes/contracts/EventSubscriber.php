<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\Contracts;

use October\Rain\Events\Dispatcher;

interface EventSubscriber
{
    public function subscribe(Dispatcher $dispatcher);
}
