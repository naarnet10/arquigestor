<?php

namespace Test\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse as JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('TestBundle:Default:index.html.twig');
    }
    public function valueAction(Request $request)
    {
        
        $value = $request->request->get('value');
        if($value < 0 || $value%10 !== 0){
            $response = new JsonResponse(json_encode(array('message' => "Error")));
            return $response;
            
        }
        $array = $this->contAction($value);
        return new JsonResponse(array('hundred' => $array['100'], 'fifty' => $array['50'], 'twenty' => $array['20'], 'ten' => $array['10']), 200);
    }
    public function contAction($value){
        
        $cont100 = 0 ; $cont50 = 0; $cont20 = 0; $cont10 =0 ;
        while($value != 0){
            if($value >=100 ){
                $cont100 = $cont100 + 1;
                $value = $value -100;
            }
            if($value >=50 && $value <100){
                $cont50 = $cont50 + 1;
                $value = $value -50;
            }
            if($value >=20 && $value <50 ){
                $cont20 = $cont20 + 1;
                $value = $value -20;
            }
            if($value >=10 && $value <20){
                $cont10 = $cont10 + 1;
                $value = $value -10;
            }
            
        }

        $arraybilletes = array();
        $arraybilletes['100']=$cont100;
        $arraybilletes['50']=$cont50;
        $arraybilletes['20']=$cont20;
        $arraybilletes['10']=$cont10;
        return $arraybilletes;
        
        
    }
}
