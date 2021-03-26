<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class LuckyController
{

       /**
        * @Route("/lucky_number", name="app_lucky_number")
        */
       public function number(Request $request): Response
    {
        $user = [
            'name' => 'John Doe',
            'place' => 'Lens',
        ];

        dump($user);
        $number = random_int(0, 100);
        $name = $request->query->get('name');
        return new Response(
            "<html><body><p>Lucky number: $number pour le gagnant : $name</p></body></html>"
        );
    }
}