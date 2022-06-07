<?php 
    class Conexao{
        public static function Conectar(){
            define('servidor', 'localhost');
            define('nombre_bd', 'crud_vue');
            define('usuario', 'root');
            define('password', '');	
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
            try{
                $conexao = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
                return $conexao;                    
            }catch (Exception $e){
                die("Erro ao conectar no banco de dados: ". $e->getMessage());
            }
        }
    }

?>