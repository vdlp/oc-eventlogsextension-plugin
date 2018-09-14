<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\EventSubscribers;

use October\Rain\Events\Dispatcher;
use Vdlp\EventLogsExtension\Classes\Contracts\EventSubscriber;
use Vdlp\EventLogsExtension\Classes\EventListeners;

/**
 * Class BackendEventSubscriber
 *
 * @package Vdlp\EventLogsExtension\Classes\EventSubscribers
 */
class BackendEventSubscriber implements EventSubscriber
{
    /**
     * {@inheritdoc}
     */
    public function subscribe(Dispatcher $dispatcher)
    {
        $dispatcher->listen('backend.list.extendColumns', EventListeners\Backend\ListExtendColumns::class);
        $dispatcher->listen('backend.list.injectRowClass', EventListeners\Backend\ListInjectRowClass::class);
        $dispatcher->listen('backend.page.beforeDisplay', EventListeners\Backend\PageBeforeDisplay::class);
    }
}
