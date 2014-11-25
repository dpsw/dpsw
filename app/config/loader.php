<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */

$loader->registerNamespaces(array(
    'Magandi\Forms' => $config->application->formsDir,
));

$loader->registerDirs(
    array(
        $config->application->controllersDir,
        $config->application->modelsDir
    )
)->register();
