<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension;

use Backend;
use Event;
use System\Classes\PluginBase;
use System\Controllers\EventLogs;
use Vdlp\EventLogsExtension\Classes\EventSubscribers\BackendEventSubscriber;

/** @noinspection PhpMissingParentCallCommonInspection */

/**
 * Class Plugin
 *
 * EventLogs Plugin Information File.
 *
 * @package Vdlp\EventLogsExtension
 */
class Plugin extends PluginBase
{
    /**
     * {@inheritdoc}
     */
    public function pluginDetails(): array
    {
        return [
            'name' => 'Event Logs Extension',
            'description' => 'October CMS plugin which improves the event logs view',
            'author' => 'Van der Let & Partners',
            'icon' => 'icon-leaf',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        Event::subscribe(BackendEventSubscriber::class);

        EventLogs::extend(function (EventLogs $controller) {
            $controller->listConfig = '$/vdlp/eventlogsextension/controllers/eventlogs/config_list.yaml';
        });
    }

    /**
     * {@inheritdoc}
     */
    public function registerNavigation(): array
    {
        return [
            'eventlogsextension' => [
                'label' => 'system::lang.event_log.menu_label',
                'iconSvg' => '/plugins/vdlp/eventlogsextension/assets/images/icon.svg',
                'url' => Backend::url('system/eventlogs'),
                'order' => 202,
                'permissions' => [
                    'system.access_logs',
                ],
            ]
        ];
    }
}
