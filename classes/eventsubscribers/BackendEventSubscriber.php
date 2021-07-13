<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\EventSubscribers;

use October\Rain\Events\Dispatcher;
use Vdlp\EventLogsExtension\Classes\Contracts\EventSubscriber;
use Vdlp\EventLogsExtension\Classes\EventListeners;

final class BackendEventSubscriber implements EventSubscriber
{
    public function subscribe(Dispatcher $dispatcher): void
    {
        $dispatcher->listen('backend.list.extendColumns', EventListeners\Backend\ListExtendColumns::class);
        $dispatcher->listen('backend.list.injectRowClass', EventListeners\Backend\ListInjectRowClass::class);
    }
}
