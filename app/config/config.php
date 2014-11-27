<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '1234qwer',
        'dbname'      => 'magandi',
    ),
    'application' => array(
        'controllersDir' => __DIR__ . '/../../app/controllers/',
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'viewsDir'       => __DIR__ . '/../../app/views/',
        'formsDir'       => __DIR__ . '/../../app/forms/',
        'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        'libraryDir'     => __DIR__ . '/../../app/library/',
        'cacheDir'       => __DIR__ . '/../../app/cache/',
        'baseUri'        => '/',
        'basUrl'         => 'magandi.local',
        'cryptSalt' => 'aEAfR|_&G&a1+vU]:jFr1Qc6?/.1[@DyaIP_2My|:+.u>/6m,$D'
    ),
));
