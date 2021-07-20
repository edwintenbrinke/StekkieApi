<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController
{
    /**
     * @Route("/test", name="fetch_reviews")
     */
    public function fetchReviews(): Response
    {
        return new JsonResponse(['reviews']);
    }
}
