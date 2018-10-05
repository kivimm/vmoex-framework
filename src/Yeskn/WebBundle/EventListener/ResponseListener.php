<?php

/*
 * This file is part of project yeskn/vmoex.
 *
 * (c) Jaggle <jaggle@yeskn.com>
 *
 * created at 2018-05-31 21:18:20
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yeskn\WebBundle\EventListener;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class ResponseListener
{
    public function onKernelResponse(FilterResponseEvent $event)
    {
        $response = $event->getResponse();

        $response->headers->remove('X-Powered-By');
        $response->headers->set('X-Powered-By', 'Vmoex/0.1.12');

//        $locale = $event->getRequest()->cookies->get('_locale');
//
//        if (empty($locale)) {
//            $locale = 'zh_CN';
//        }
//
//        $response->headers->setCookie(new Cookie('_locale', $locale));
    }
}