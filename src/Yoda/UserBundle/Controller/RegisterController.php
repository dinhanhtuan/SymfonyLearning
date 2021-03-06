<?php

namespace Yoda\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RegisterController extends Controller
{
    /**
     *
     * @return array
     *
     * @Template()
     */
    public function registerAction()
    {
        $form = $this->createFormBuilder()
            ->add('username', 'text')
            ->add('email', 'text')
            ->add('password', 'password')
            ->getForm()
        ;

        return array(
            'form' => $form->createView()
        );
    }
}