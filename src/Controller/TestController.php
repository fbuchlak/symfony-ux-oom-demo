<?php

declare(strict_types=1);

namespace App\Controller;

use App\VO\Item;
use App\VO\ItemTag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TestController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function action(): Response
    {
        $items = [];
        for ($i = 0; $i < 100; $i++) {
            $items[] = new Item(
                sprintf('Item %d', $i),
                [
                    new ItemTag(sprintf('A%d-%d', $i, 1), 'A1'),
                ],
                [
                    new ItemTag(sprintf('B%d-%d', $i, 1), 'B1'),
                    new ItemTag(sprintf('B%d-%d', $i, 2), 'B2'),
                ],
                [
                    new ItemTag(sprintf('C%d-%d', $i, 1), 'X1'),
                    new ItemTag(sprintf('C%d-%d', $i, 2), 'X2'),
                    new ItemTag(sprintf('C%d-%d', $i, 3), 'X3'),
                ],
            );
        }

        return $this->render('test.html.twig', [
            'items' => $items,
        ]);
    }
}
