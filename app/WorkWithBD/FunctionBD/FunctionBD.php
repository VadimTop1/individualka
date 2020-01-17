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
    public function InspTable($arrObj)
    {
        if($arrObj instanceof InterfaceTables)
        {
            $queryInsp = "SELECT count(*) FROM ".$arrObj->get_NameTable();
            $resultInsp = pg_query($this->get_pgsql(), $queryInsp);
            if($queryInsp >= 0)
                return true;
            else
                return false;
        }
        else
            return false;
    }

    public function CreteTable($arrObj) 
    {
        echo "<br/>-> Проверка интерфейса,перед добавлением: ". $arrObj instanceof InterfaceTables;
        if($arrObj instanceof InterfaceTables)
        {
            $queryStr = "CREATE TABLE ".$arrObj->get_NameTable()."(";//."(Id SERIAL PRIMARY KEY, FirstName CHARACTER VARYING(30), LastName CHARACTER VARYING(30),Email CHARACTER VARYING(30),Age INTEGER);";
            foreach($arrObj->get_GreqteQuery() as $value)
                $queryStr .= $value;   
            $queryStr .= ");";
            echo "<br/><br/>-> Создание таблицы, запрос: ". $queryStr;

            $qu = pg_query($this->get_pgsql(), $queryStr);
            echo "<br/><br/>-> Проверка создания таблицы: " . $this->InspTable($arrObj);

            return $this->InspTable($arrObj);
        }
        else
            return false;
    }

    //Добавить данные в таблицу
    public function AddDataTable($arrObj, array $arrData, int $activateId) 
    {
        echo "<br/><br/>-> Проверка интерфейса,перед добавлением: ". $arrObj instanceof InterfaceTables;
        if($arrObj instanceof InterfaceTables)
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
            echo "<br/><br/>-> Добавление строки данных в таблицу, запрос: <br/>----> ". $queryStr;
            $qu = pg_query($this->get_pgsql(), $queryStr);

            $queryInsp = "SELECT count(*) FROM ".$arrObj->get_NameTable();
            $resultInspNew = pg_query($this->get_pgsql(), $queryInsp);
            if($resultInspOld < $resultInspNew)
                return true;
            else
                return false;
        }
        else
            return false;
    }

    //Вывод данных из таблицы
    public function OutPutDataTable(&$arrObj) 
    {
        echo "<br/><br/>-> Проверка интерфейса,перед выводом: ". $arrObj instanceof InterfaceTables;
        echo "<br/>";
        echo "<br/>-> Таблица аргумента: ".$arrObj->get_NameTable()."<br/>";
        if($arrObj instanceof InterfaceTables)
        {
            $queryInsp = "SELECT * FROM ".$arrObj->get_NameTable();
            echo "<br/>----> Запрос: " .$queryInsp."<br/>";
            $arrObj = pg_fetch_object($queryInsp);
            
            var_dump(pg_fetch_object($queryInsp));
            echo "<br/>";
            var_dump($arrObj);
        }
        else
            return false;
    }

    public function aa($arrObj)
    {
        echo "<br/><br/>-> Проверка интерфейса,перед добавлением: ". $arrObj instanceof InterfaceTables;
        echo "<br/>";
        echo "<br/>-> Таблица аргумента: ".$arrObj->get_NameTable()."<br/>";
        if($arrObj instanceof InterfaceTables)
        {
            echo "<br/>-> Проверка на наличии таблицы: ";
            $queryStr = "SELECT count(*) FROM ".$arrObj->get_NameTable();
            echo "<br/>----> Запрос: " .$queryStr;
            $result = pg_query($this->get_pgsql(), $queryStr);
            echo "<br/>---->".$result;// as $value)
                //echo "<br/>----> " . $value;
        }
         else
            echo "ERROR";
    }
}
?>