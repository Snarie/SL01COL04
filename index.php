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
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php",
    "/skills" => "controllers/skills.php"
];
if(array_key_exists($_SERVER['REQUEST_URI'], $routes)){
    require $routes[$_SERVER['REQUEST_URI']];
}else{
    echo "404 xD";
}




$conn = require 'private.php';

/*$app = require 'private.php';
$dbconn = $app['database'];
$dsn = "mysql:host=localhost;dbname=desaus";

try {
    $conn = new PDO(
//        "jdbc:mariadb://localhost" . ";dbname=" . $dbconn['dbname'],
        "mysql:host=127.0.0.1;dbname=honden;charset=utf8mb4",
        $dbconn['username'],
        $dbconn['password']);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}*/
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


/*class Volume {
    public static function cube($l, $h, $d){
        return ($l*$h*$d);
    }
    public static function cone($r, $h){
        return (1/3*$h*pi()*$r*$r);
    }
    public static function sphere($r){
        return (4/3*pi()*$r*$r*$r);
    }
}*/

/**
 * PDO - connect to database
 *
 */
