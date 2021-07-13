<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension;

use Event;
use System\Classes\PluginBase;
use System\Controllers\EventLogs;
use Vdlp\EventLogsExtension\Classes\EventSubscribers\BackendEventSubscriber;

final class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'Event Logs Extension',
            'description' => 'Improves the Event Logs view.',
            'author' => 'Van der Let & Partners',
            'icon' => 'icon-leaf',
        ];
    }

    public function boot(): void
    {
        Event::subscribe(BackendEventSubscriber::class);

        EventLogs::extend(static function (EventLogs $controller): void {
            $controller->listConfig = '$/vdlp/eventlogsextension/controllers/eventlogs/config_list.yaml';
        });
    }
}
