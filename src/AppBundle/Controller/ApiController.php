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
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return new JsonResponse(array('world' => 'world'));
    }

    /**
     * @Route("/todos")
     */
    public function todosAction()
    {
        $todos = array(
            array('text'=>'learn angular', 'done'=>true),
            array('text'=>'build an angular app', 'done'=>false),
            );
        return new JsonResponse($todos);
    }
    
    /**
     * @Route("/speciality/list")
     * @Method("GET")
     */
    public function specialitiesAction()
    {
        $emz = $this->getDoctrine()->getManager();
        $specialities = $emz->getRepository('AppBundle:Speciality')->findAll();
       $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
        $json = $serializer->serialize($specialities, 'json');
        return new JsonResponse($json);
    }
    
    /**
     * @Route("speciality/show/{id}")
     * @Method("GET")
     */

    public function specialityAction($id)
    {
        $emz = $this->getDoctrine()->getManager();
        $speciality = $emz->getRepository('AppBundle:Speciality')->find($id);
       $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new 
            JsonEncoder()));
        $json = $serializer->serialize($speciality, 'json');
        return new JsonResponse($json);
    }
}
