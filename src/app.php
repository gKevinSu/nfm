<?php
// example.com/src/app.php
use Symfony\Component\Routing;
use Component\DataBase;
 
$routes = new Routing\RouteCollection();

$routes->add('index', new Routing\Route('/', array(
    '_controller' => 'PageRenderer\Controller\CatalogInfo::showAction',
    'depth' => '0'
)));

$data = new DataBase();
$catalog = $data -> getCatalog();

return $routes;