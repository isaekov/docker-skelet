<?php

namespace App\Controller;

use App\MyBundle\AbstractWrapperController;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{

    /**
     * @return Response
     * @throws Exception
     * @Route("/ildar")
     */
    public function number(): Response
    {
        $number = random_int(0, 100);


       return $this->render("post/number.html.twig");
    }

}