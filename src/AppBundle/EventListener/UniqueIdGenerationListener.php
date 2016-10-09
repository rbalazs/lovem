<?php

namespace AppBundle\EventListener;

class UniqueIdGenerationListener
{
    public function onKernelException($event)
    {
        dump($event);
        die;
    }
}