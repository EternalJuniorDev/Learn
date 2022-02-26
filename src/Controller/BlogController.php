<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends  AbstractController
{
    #[Route('/blog', name: 'blog_name')]
    public function list(Request $request)
    {
        return $this->render('blog/list.html.twig');
    }

    #[Route('/blog/{slug}', name: 'blog_show')]
    public function show(string $slug)
    {
        return $this->render('blog/show.html.twig',[
            'slug' => $slug,
        ]);
    }
}