<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Produk::index');
$routes->get('/produk', 'Produk::index');
