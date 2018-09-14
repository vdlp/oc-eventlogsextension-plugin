<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\EventListeners\Backend;

use Backend\Widgets\Lists;
use System\Models\EventLog;

/**
 * Class ListExtendColumns
 *
 * @package Vdlp\EventLogsExtension\Classes\EventListeners\Backend
 */
class ListExtendColumns
{
    /**
     * @param Lists $widget
     */
    public function handle(Lists $widget)
    {
        if ($widget->model instanceof EventLog) {
            $widget->addColumns([
                'created_at' => [
                    'label' => 'system::lang.event_log.created_at',
                    'searchable' => true,
                    'width' => '180px',
                    'type' => 'datetime',
                    'format' => 'Y-m-d H:i:s'
                ],
                'level' => [
                    'label' => 'Level',
                ]
            ]);
        }
    }
}
