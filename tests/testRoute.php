<?php
declare(strict_types=1);
namespace Mzb\Tests;

use Mzb\Router\Route;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RouterTest extends TestCase
{
    public function testRoute()
    {
        $request = Request::create('12');
        $route = new Route('GET', '12', AboutController::class, 'about');
 
       
        $this->assertInstanceOf(Route::class, $route);
        $this->assertEquals('Mzb\Tests\AboutController', $route->getController());
        $this->assertTrue($route->match($request->getPathInfo()));
    }
}
