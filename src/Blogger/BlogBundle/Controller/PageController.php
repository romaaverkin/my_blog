<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@BloggerBlog/Page/index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('@BloggerBlog/Page/about.html.twig');
    }
}