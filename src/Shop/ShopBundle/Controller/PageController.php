<?php

namespace Shop\ShopBundle\Controller;


use Shop\ShopBundle\Entity\Enquiry;
use Shop\ShopBundle\Forms\EnquiryType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('ShopBundle:Page:about.html.twig');
    }

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

                return $this->redirect($this->generateUrl('ShopBundle_contact'));
            }
        }
        return $this->render('ShopBundle:Page:contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}