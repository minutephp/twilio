<?php
/**
 * User: Sanchit <dev@minutephp.com>
 * Date: 7/8/2016
 * Time: 7:57 PM
 */
namespace Minute\Menu {

    use Minute\Event\ImportEvent;

    class TwilioMenu {
        public function adminLinks(ImportEvent $event) {
            $links = [
                'twilio' => ['title' => 'Enable 2FA', 'icon' => 'fa-phone', 'priority' => 6, 'parent' => 'expert', 'href' => '/admin/twilio']
            ];

            $event->addContent($links);
        }
    }
}