<?php

lass Conexao{
    public static $instance;

    private function__construct(){
        //criar a funcionalidade de instância
    }

        public static function getConexao(){
            if(!isset(self::$instance)){
                self::$instance = new PDO ('mysql:host=localhost;dbname=php1', 'root' 'senac', array(PDO::MYSQL_attr_init_command => "SET NAMES utf8"));
                self::$instance ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance ->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }

            return self::$instance;

        }
    
}