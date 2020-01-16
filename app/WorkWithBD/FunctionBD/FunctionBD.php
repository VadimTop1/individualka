<?php
namespace WorkWithBD\FunctionBD;

use  WorkWithBD\InterfacesBD\InterfaceTables\InterfaceTables;

abstract class FunctionBD
{
    abstract public function get_host(): string;

    abstract public function get_dbname(): string;

    abstract public function get_user(): string;

    abstract public function get_password(): string;

    abstract public function get_pgsql();

    /* Общии методы */
    public function ObjectDataBD(InterfaceTables &$arrObj, array $resourceSQL)
    {
       // if()
        //array_push($stack, "apple", "raspberry");
        
        //$db_conn = $this->get_pgsql();
        //$qu = pg_query($db_conn, "SELECT * FROM books ORDER BY author");
        //$data = pg_fetch_object($qu)
    }
    //Создание таблицы
    public function CreteTable(InterfaceTables $arrObj) 
    {
        $queryStr = "CREATE TABLE ".$arrObj->get_NameTable()."(";//."(Id SERIAL PRIMARY KEY, FirstName CHARACTER VARYING(30), LastName CHARACTER VARYING(30),Email CHARACTER VARYING(30),Age INTEGER);";
        
        $queryStr .= ");";
        //$queryStr = "SELECT * FROM books ORDER BY author";
        $qu = pg_query($this->get_pgsql(), $queryStr);
    }

    //Добавить данные в таблицу
    public function AddDataTable() 
    {
        
    }

    //Вывод данных из таблицы
    public function OutPutDataTable() 
    {
        
    }
}
?>