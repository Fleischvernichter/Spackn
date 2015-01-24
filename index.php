<?php
/**
 * Created by IntelliJ IDEA.
 * User: aschulz1
 * Date: 14.01.15
 * Time: 14:55
 * To change this template use File | Settings | File Templates.
 */

require 'vendor/autoload.php';
require 'app/classes/DatabaseDao.php';
require 'app/config/GlobalConfig.php';

use Config\GlobalConfig as Config;
use Slim\Slim;

$app = new Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => 'app/views'
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);

$twig = $app->view()->getEnvironment();

$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$db  = new DatabaseDao(
    Config::COMMUNITY_DB_HOST, Config::COMMUNITY_DB_NAME,
    Config::COMMUNITY_DB_USER, Config::COMMUNITY_DB_PW
);


//Load the routes:
require 'app/routes.php';

$app->run();