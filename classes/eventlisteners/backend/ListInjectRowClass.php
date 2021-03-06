<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\EventListeners\Backend;

use Backend\Widgets\Lists;
use System\Models\EventLog;

final class ListInjectRowClass
{
    /**
     * @param Lists $widget
     * @param mixed $record
     * @return string
     */
    public function handle(Lists $widget, $record)
    {
        if ($record instanceof EventLog) {
            switch (strtolower($record->getAttribute('level'))) {
                case 'debug':
                    return 'safe';
                case 'info':
                    return 'frozen';
                case 'notice':
                case 'warning':
                    return 'processing';
                case 'error':
                case 'critical':
                case 'alert':
                    return 'negative';
                case 'emergency':
                    return 'important';
            }
        }
    }
}
