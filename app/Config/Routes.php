<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('produtos/index', 'Produtos::index'); // Define uma rota para a URL 'produtos/index', direcionando para o método index do controlador Produtos.
$routes->setAutoRoute(true);