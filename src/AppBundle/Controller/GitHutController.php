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
        return $this->render('githut/index.html.twig', [
            'avatar_url'    => "https://avatars2.githubusercontent.com/u/12968163?v=4",
            'name'          => "Code Review Videos",
            'login'         => "codereviwsvideos",
            'details'       =>[
                'company'   => "Code Review Videos",
                'location'  => "Preston, Lancs, UK",
                'joined_on' => "joined on: 2015-06-19"
            ],
            'blog'          => "https://codereviewvideos.com/",
            'social_data'   =>[
                'Public Repos'  => 39,
                'Followers'     => 51,
                'Following'     => 1,
            ],
        ]);
    }

//    /**
//     * @Route("/profile", name="profile")
//     */
//    public function profileAction(Request $request)
//    {
//        return $this->render("githut/profile.html.twig", [
//            'avatar_url'    => "https://avatars2.githubusercontent.com/u/12968163?v=4",
//            'name'          => "Code Review Videos",
//            'login'         => "codereviwsvideos",
//            'details'       =>[
//                'company'   => "Code Review Videos",
//                'location'  => "Preston, Lancs, UK",
//                'joined_on' => "joined on: 2015-06-19"
//            ],
//            'blog'          => "https://codereviewvideos.com/",
//            'social_data'   =>[
//                'Public Repos'  => 39,
//                'Followers'     => 51,
//                'Following'     => 1,
//            ],
//        ]);
//    }
}