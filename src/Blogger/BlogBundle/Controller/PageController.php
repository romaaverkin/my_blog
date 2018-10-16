<?php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('contact'));
            }
        }

        return $this->render('@BloggerBlog/Page/contact.html.twig', array(
            'form' => $form->createView()
        ));
    }

}