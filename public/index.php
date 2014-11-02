<?php

try {

    /**
     * Read the configuration
     */
    $config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../app/config/config.ini');
    
    //Register an autoloader
    $loader = new \Phalcon\Loader();
    $loader->registerDirs(
        array(
            __DIR__ . $config->application->controllersDir,
            __DIR__ . $config->application->modelsDir
        )
    )->register();
//    var_dump($config->database->name);die();
    //Create a DI
    $di = new Phalcon\DI\FactoryDefault();
    
    //Set the database service
    $di->set('db', function(){
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host" => "localhost",
            "username" => "root",
            "password" => "1234qwer",
            "dbname" => "mymarket",
            
//            "host" => $config->database->host,
//            "username" => $config->database->username,
//            "password" => $config->database->password,
//            "dbname" => $config->database->name
        ));
    });

    //Setting up the view component
    $di->set('view', function(){
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    });
    
    $di->set('view', function() use ($config) {

		$view = new \Phalcon\Mvc\View();

		$view->setViewsDir(__DIR__ . $config->application->viewsDir);

		$view->registerEngines(array(
			".volt" => 'volt'
		));

		return $view;
	});
        
    /**
     * Setting up volt
     */
    $di->set('volt', function($view, $di) {

        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

//        $volt->setOptions(array(
//            "compiledPath" => "../cache/volt/"
//        ));

        return $volt;
    }, true);

    //Handle the request
    $application = new \Phalcon\Mvc\Application();
    $application->setDI($di);
    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}