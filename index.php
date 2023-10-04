<?php

/**
 * Server variabelen
 * SERVER
 * GET
 * POST
 */

//require 'views/index.view.php';

/*echo Volume::cube(5,10,5);
echo '<br>';
echo Volume::sphere(2);*/

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details/details.php",
    "/details/cijfers" => "controllers/details/cijfers.php",
    "/details/ervaringen" => "controllers/details/ervaringen.php",
    "/details/hobbies" => "controllers/details/hobbies.php",
    "/details/profiel" => "controllers/details/profiel.php",
    "/contact" => "controllers/contact.php",
    "/skills" => "controllers/skills.php"
];
if(array_key_exists($_SERVER['REQUEST_URI'], $routes)){
    require $routes[$_SERVER['REQUEST_URI']];
}else{
    echo "404 xD";
}




$conn = require 'private.php';
/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */
/**
 * PDO - connect to database
 *
 */
