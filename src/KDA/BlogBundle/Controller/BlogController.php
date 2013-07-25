<?php

namespace KDA\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KDA\BlogBundle\Entity\Blog;
use KDA\BlogBundle\Form\BlogType;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
    /**
     * Show a blog entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $blog = $em->getRepository('KDABlogBundle:Blog')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('KDABlogBundle:Blog:show.html.twig', array(
            'blog'      => $blog,
        ));
    }


    public function createAction()
    {
        $blog  = new Blog();
        $request = $this->getRequest();
        $form    = $this->createForm(new BlogType());
        if ("POST" == $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('KDABlogBundle_blog_show', array(
                    'id' => $comment->getBlog()->getId()))
                );
            }
        }

        return $this->render('KDABlogBundle:Blog:create.html.twig', array(
            'form'    => $form->createView()
        ));
    }
}