<?php

namespace PizzaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MenuController extends Controller{

    /**
     * @Route("/menu")
     */
    public function menuAction(){
        $pizza = $this->getDoctrine()->getRepository('PizzaBundle:Dish')->findAll();
        
        return $this->render('PizzaBundle:Default:pizza_menu.html.twig',array(
            'pizza' => $pizza
        ));
    }
}
