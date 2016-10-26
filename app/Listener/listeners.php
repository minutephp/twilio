<?php

/** @var Binding $binding */
use Minute\Event\AdminEvent;
use Minute\Event\Binding;
use Minute\Menu\DebugMenu;
use Minute\Menu\TwilioMenu;

$binding->addMultiple([
    //debug
    ['event' => AdminEvent::IMPORT_ADMIN_MENU_LINKS, 'handler' => [TwilioMenu::class, 'adminLinks']],

]);