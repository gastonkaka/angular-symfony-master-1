<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

/**
 * @Route("/pages")
 */
class ApiController extends Controller
{   
    /**
     * @Route("/list")
     * @Method("GET")
     */
    public function pagesAction()
    {
        $emz = $this->getDoctrine()->getManager();
        $pages = $emz->getRepository('AppBundle:Page')->findAll();
       $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
        $json = $serializer->serialize($pages, 'json');
        return new JsonResponse($json);
    }
    
    /**
     * @Route("show/{id}")
     * @Method("GET")
     */

    public function pageAction($id)
    {
        $emz = $this->getDoctrine()->getManager();
        $page = $emz->getRepository('AppBundle:Page')->find($id);
       $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
        $json = $serializer->serialize($page, 'json');
        return new JsonResponse($json);
    }
}
