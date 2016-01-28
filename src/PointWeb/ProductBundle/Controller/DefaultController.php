<?php

namespace PointWeb\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('PointWebNewsBundle:News')->findLastNews(array('online'=>true));
      
        $product = $this->getDoctrine()->getRepository('PointWebProductBundle:Product')->findAll();
      
        return $this->render('PointWebProductBundle:Default:index.html.twig', array('central' => $product, 'article'=>$article));
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $detail = $em->getRepository('PointWebProductBundle:Product')->find($id);
        return $this->render('PointWebProductBundle:Default:show.html.twig', array('detail' => $detail));
    }

}

