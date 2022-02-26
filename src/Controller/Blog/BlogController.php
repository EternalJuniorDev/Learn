<?php

namespace App\Controller\Blog;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends  AbstractController
{
    #[Route('/{page<\d+>?1}', name: 'index')]
    public function list(int $page)
    {
        return $this->render('blog/list.html.twig', [
            'page' => $page,
        ]);
    }

    #[Route('/{slug}', name: 'show')]
    public function show(string $slug)
    {
        return $this->render('blog/show.html.twig',[
            'slug' => $slug,
        ]);
    }
}