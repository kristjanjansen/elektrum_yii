<?php

use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as DB;

class Loader {

    public function loadEnvironment() {
        $dotenv = new Dotenv(__DIR__.'/../../');
        $dotenv->load();
    }

    public function loadDatabase() {
        
        $db = new DB;

        $db->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => getenv('DB_DATABASE'),
            'username'  => getenv('DB_USERNAME'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        
        $db->setAsGlobal();
        $db->bootEloquent();

    }
    
}
