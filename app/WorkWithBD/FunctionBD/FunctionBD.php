<?php
namespace WorkWithBD\FunctionBD;

use WorkWithBD\ClassBD\Table1\Table1;
use  WorkWithBD\InterfacesBD\InterfaceTables\InterfaceTables;

abstract class FunctionBD
{
    abstract public function get_host(): string;

    abstract public function get_dbname(): string;

    abstract public function get_user(): string;

    abstract public function get_password(): string;

    abstract public function get_pgsql();

    /* Общии методы */

    //Создание таблицы
    public function CreteTable($arrObj) 
    {
        if($arrObj instanceof InterfaceTables)
        {
            $queryStr = "CREATE TABLE ".$arrObj->get_NameTable()."(";//."(Id SERIAL PRIMARY KEY, FirstName CHARACTER VARYING(30), LastName CHARACTER VARYING(30),Email CHARACTER VARYING(30),Age INTEGER);";
            foreach($arrObj->get_GreqteQuery() as $newArr)
                foreach($newArr as $value)
                    $queryStr .= $value;   
            $queryStr .= ")";

            //Удаление данных из таблицы
            $queryDrop = "DROP TABLE ". $arrObj->get_NameTable();
            pg_query($this->get_pgsql(), $queryDrop);

            $qu = pg_query($this->get_pgsql(), $queryStr);
            return $qu;
        }
        else
            return false;
    }

    //Добавить данные в таблицу
    public function AddDataTable($arrObj, array $arrData /*int $activateId*/) 
    {
        if($arrObj instanceof InterfaceTables)
        {
            //(secondName, firstName, thirdName, age)
            $queryStr = "INSERT INTO ".$arrObj->get_NameTable()." (secondName, firstName, thirdName, age) VALUES (";
            foreach($arrData as $value)
                $queryStr .= $value . ",";
            $queryStr = substr($queryStr, 0, -1);
            $queryStr .= ")";
            $qu = pg_query($this->get_pgsql(), $queryStr);
            return $qu;
        }
        else
            return false;
    }

    //Вывод данных из таблицы
    public function OutPutDataTable(&$arrObj) 
    {
        if($arrObj instanceof InterfaceTables)
        {
            $queryInsp = "SELECT * FROM ".$arrObj->get_NameTable();
            $qu = pg_query($this->get_pgsql(), $queryInsp) or die('Ошибка запроса: ' . pg_last_error());
            $result = pg_query($this->get_pgsql(),$queryInsp) or die('Ошибка запроса: ' . pg_last_error());

            $resultArrObj = array();

            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                $newClassName = $arrObj->get_NameClass();
                $controller = new $newClassName;
                $i = 0;
                foreach ($line as $col_value) {
                    $arrMethod = "set_".$arrObj->get_GreqteQuery()[$i][0];
                    $controller->$arrMethod($col_value);
                    $i++;
                }
                array_push($resultArrObj, $controller);
            }
            $arrObj =  $resultArrObj;
            return $arrObj;
        }
        else
            return false;
    }
}
?>