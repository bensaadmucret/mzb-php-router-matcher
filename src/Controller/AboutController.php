<?php declare(strict_types=1);

namespace Mzb\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class AboutController
{
    public function about($id, $slug): Response
    {
        return new Response('About page test . ' . $id .' ' . $slug . '!');
    }
}
