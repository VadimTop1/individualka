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
    public function InspTable(InterfaceTables $arrObj)
    {
        $queryInsp = "SELECT count(*) FROM ".$arrObj->get_NameTable();
        $resultInsp = pg_query($this->get_pgsql(), $queryInsp);
        if($queryInsp >= 0)
            return true;
        else
            return false;
    }

    public function CreteTable(InterfaceTables $arrObj) 
    {
        echo "<br/>->";
        $queryStr = "CREATE TABLE ".$arrObj->get_NameTable()."(";//."(Id SERIAL PRIMARY KEY, FirstName CHARACTER VARYING(30), LastName CHARACTER VARYING(30),Email CHARACTER VARYING(30),Age INTEGER);";
        foreach($arrObj->get_GreqteQuery() as $value)
            $queryStr .= $value;   
        $queryStr .= ");";
        echo "<br/>-> Создание таблицы, запрос: ". $queryStr;

        $qu = pg_query($this->get_pgsql(), $queryStr);
        echo "<br/>" . $this->InspTable($arrObj);

        return $this->InspTable($arrObj);
    }

    //Добавить данные в таблицу
    public function AddDataTable(InterfaceTables $arrObj, array $arrData, int $activateId) 
    {
        $queryInsp = "SELECT count(*) FROM ".$arrObj->get_NameTable();
        $resultInspOld = pg_query($this->get_pgsql(), $queryInsp);

        $queryStr = "INSERT INTO ".$arrObj->get_NameTable()." VALUES (";
        $i = $activateId;
        foreach($arrData as $value)
        {
            if($i != 0)
                $queryStr .= $value . ",";
            else
                $i--;
        }
        $queryStr = substr($queryStr, 0, -1);
        $queryStr .= ");";
        $qu = pg_query($this->get_pgsql(), $queryStr);

        $queryInsp = "SELECT count(*) FROM ".$arrObj->get_NameTable();
        $resultInspNew = pg_query($this->get_pgsql(), $queryInsp);
        if($resultInspOld < $resultInspNew)
            return true;
        else
            return false;
    }

    //Вывод данных из таблицы
    public function OutPutDataTable(InterfaceTables $arrObj) 
    {
        $queryInsp = "SELECT * FROM ".$arrObj->get_NameTable();
        return pg_fetch_object($queryInsp);
    }
}
?>