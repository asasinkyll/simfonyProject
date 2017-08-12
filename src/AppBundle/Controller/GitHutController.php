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
            'repo_count' => 100,
            'most_stars' => 67,
            'repos' =>[
                [
                    'name' => 'some repository',
                    'url' => 'google.com',
                    'stargazers_count'  => 46,
                    'description' => 'learn simfony 3',
                ],
                [
                    'name' => 'some other',
                    'url' => 'youtube.com.com',
                    'stargazers_count'  => 22,
                    'description' => 'learn someting 3',
                ],
                [
                    'name' => 'gogogle cod',
                    'url' => 'yahoo.com',
                    'stargazers_count'  => 11,
                    'description' => 'placinta cu branza',
                ],

            ]
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