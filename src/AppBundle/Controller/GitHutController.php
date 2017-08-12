<?php
/**
 * Created by PhpStorm.
 * User: Dorinel
 * Date: 12.08.2017
 * Time: 10:49
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller
{

    /**
     * @Route("/", name="githut")
     */
    public function githutAction(Request $request)
    {
        return $this->render('githut/index.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/test/{testnumber}")
     */
    public function parameterAction(Request $request, $testnumber)
    {
        return $this->render('githut/test.html.twig', [
            'test' => $testnumber,
            'pagetitle' => "acesta este titlul pagini"
        ]);
    }


    /**
     * @Route("/misto/{misto}")
     */
    public function mistoAction(Request $request, $misto)
    {
        return $this->render('githut/test.html.twig');
    }
}