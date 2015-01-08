<?php

namespace LiveChat\MessageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/message-box", name="messageBox")
     * @Template()
     */
    public function messageBoxAction()
    {
        return $this->render("LiveChatMessageBundle:Default:message-box.html.twig");
    }
}
