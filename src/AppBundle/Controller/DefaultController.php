<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/log/{uid}", name="log")
     * @param $uid
     * @return Response
     */
    public function indexAction($uid)
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>UID: ' . $uid . $number . '</body></html>'
        );
    }
}
