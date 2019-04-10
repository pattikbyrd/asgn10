<?php

class Connection
{
    public static function make($config)
    {
        try {
            //return new PDO('mysql:host=127.0.0.1:8889; dbname=mytodo', 'root', 'root' );
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'], 
                $config['pass'],
                $config['options']
            );

        } catch (PDOException $e) {
            die('Could not connect');
        }
    }
}