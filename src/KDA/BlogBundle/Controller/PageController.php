<?php

namespace KDA\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('KDABlogBundle:Page:index.html.twig');
    }
}