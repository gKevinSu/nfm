<?php
// example.com/src/PageRenderer/Controller/CatalogInfo.php
namespace PageRenderer\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Component\DataBase;

class CatalogInfo
{

    use ControllerTrait;

    public function showAction()
    {
    	$data = new DataBase();
		$catalog = $data -> getCatalog();
		
        $twig = $this->createTwig();

        $content = $twig->render("index.html.twig", 
        	array('catalog' => $catalog));
        return new Response($content);
    }
}