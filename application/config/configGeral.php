<?php
    //TIPOS "up" para online, "dev" para teste
    $server = "dev";
    
    switch($server){
        case "dev":
            $config['base_url'] = 'https://www.gdeveloper-otvss.c9users.io/';
            
            $db['default'] = array(
            	'dsn'	=> '',
            	'hostname' => 'localhost',
            	'username' => 'otvss',
            	'password' => '',
            	'database' => 'gdeveloper',
            	'dbdriver' => 'mysqli',
            	'dbprefix' => '',
            	'pconnect' => FALSE,
            	'db_debug' => (ENVIRONMENT !== 'production'),
            	'cache_on' => FALSE,
            	'cachedir' => '',
            	'char_set' => 'utf8',
            	'dbcollat' => 'utf8_general_ci',
            	'swap_pre' => '',
            	'encrypt' => FALSE,
            	'compress' => FALSE,
            	'stricton' => FALSE,
            	'failover' => array(),
            	'save_queries' => TRUE
            );
        break;
        
        case "up":
            $config['base_url'] = 'https://www.gamedeveloper.com.br';
            
            $db['default'] = array(
            	'dsn'	=> '',
            	'hostname' => 'localhost',
            	'username' => 'otvss',
            	'password' => 'gorgdev',
            	'database' => 'gdeveloper',
            	'dbdriver' => 'mysqli',
            	'dbprefix' => '',
            	'pconnect' => FALSE,
            	'db_debug' => (ENVIRONMENT !== 'production'),
            	'cache_on' => FALSE,
            	'cachedir' => '',
            	'char_set' => 'utf8',
            	'dbcollat' => 'utf8_general_ci',
            	'swap_pre' => '',
            	'encrypt' => FALSE,
            	'compress' => FALSE,
            	'stricton' => FALSE,
            	'failover' => array(),
            	'save_queries' => TRUE
            );
        break;
    }
    
    