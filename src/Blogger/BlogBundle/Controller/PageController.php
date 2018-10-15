<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends Controller
{
    /**
     * @Route("/", name="home")
     *
     */
    public function indexAction()
    {
        return $this->render('@BloggerBlog/Page/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('@BloggerBlog/Page/about.html.twig');
    }
}