<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */

$loader->registerNamespaces(array(
    'Magandi\Forms' => $config->application->formsDir,
));

$loader->registerClasses(
	 array(
	 "FacebookLibrary"   => $config->application->libraryDir.'/Mars/Social/FacebookLibrary.php',
	 "Facebook" => $config->application->libraryDir.'/Mars/Social/sdk/facebook.php'
	)
);

$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
)->register();
