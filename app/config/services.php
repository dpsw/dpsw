<?php
use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Crypt;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\View\Engine\Volt as VoltEngine;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Flash\Session as Flash;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function () use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
}, true);

/**
 * Setting up the view component
 */
$di->set('view', function () use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(
        '.volt' => function ($view, $di) use ($config) {

            $volt = new VoltEngine($view, $di);

            $volt->setOptions(array(
                'compiledPath' => $config->application->cacheDir,
                'compiledSeparator' => '_'
            ));

            return $volt;
        },
        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));

    return $view;
}, true);

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->set('db', function () use ($config) {
    return new DbAdapter(array(
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname,
        'charset' => 'utf8'
    ));
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function () {
    return new MetaDataAdapter();
});

/**
 * Start the session the first time some component request the session service
 */
$di->set('session', function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
});

// $di->set('security', function(){

//     $security = new Phalcon\Security();

//     //Устанавливаем фактор хеширования в 12 раундов
// //    $security->setWorkFactor(12);

//     return $security;
// }, true);

$di->set('crypt', function () use ($config) {
    $crypt = new Crypt();
    $crypt->setKey($config->application->cryptSalt);
    return $crypt;
});

$di->set('flash', function () {
    return new Flash(array(
        'error'   => 'flash-message error',
        'notice'  => 'flash-message notice',
        'success' => 'flash-message success',
        'warning' => 'flash-message warning',
    ));
});


$di->set('facebook', function() use ($config){

   $facebook = new Facebook(
   array(

       'appId' => '1510038829249792',
       'secret' => '8ac38481d51c63719d4ca6af52ffeab1'

      ));

    $scope = 'user_status,email,publish_actions,offline_access';

    $fb = new FacebookLibrary($facebook,$scope);
    return $fb;
});

// FACEBOOK
//FacebookSession::setDefaultApplication('1510038829249792', '8ac38481d51c63719d4ca6af52ffeab1');
//FacebookSession::setDefaultApplication('1510038829249792', '8ac38481d51c63719d4ca6af52ffeab1');