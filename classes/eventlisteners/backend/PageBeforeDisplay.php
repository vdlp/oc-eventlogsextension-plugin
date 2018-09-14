<?php

declare(strict_types=1);

namespace Vdlp\EventLogsExtension\Classes\EventListeners\Backend;

use Backend\Classes\Controller;
use BackendMenu;
use System\Controllers\EventLogs;

/**
 * Class PageBeforeDisplay
 * @package Vdlp\EventLogsExtension\Classes\EventListeners\Backend
 */
class PageBeforeDisplay
{
    /**
     * @param Controller $controller
     * @return void
     */
    public function handle(Controller $controller)
    {
        if ($controller instanceof EventLogs) {
            BackendMenu::setContext('Vdlp.EventLogsExtension', 'eventlogsextension');
        }
    }
}
