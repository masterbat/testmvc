<?php
class Db{
    /**
     * @param array $config
     * @return mysqli
     */
    public static function getConnection($config){
        return mysqli_connect($config['db_host'], $config['db_user'], $config['db_password'], $config['db_name'] );
    }
}