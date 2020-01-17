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
    public function ObjectDataBD(InterfaceTables &$arrObj, array $resourceSQL)
    {
       // if()
        //array_push($stack, "apple", "raspberry");
        
        //$db_conn = $this->get_pgsql();
        //$qu = pg_query($db_conn, "SELECT * FROM books ORDER BY author");
        //$data = pg_fetch_object($qu)
    }
    
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

    //Создание таблицы
    public function CreteTable($arrObj) 
    {
        echo "<br/>-> Проверка интерфейса,перед созданием: ". $arrObj instanceof InterfaceTables;
        if($arrObj instanceof InterfaceTables)
        {
            $queryStr = "CREATE TABLE ".$arrObj->get_NameTable()."(";//."(Id SERIAL PRIMARY KEY, FirstName CHARACTER VARYING(30), LastName CHARACTER VARYING(30),Email CHARACTER VARYING(30),Age INTEGER);";
            foreach($arrObj->get_GreqteQuery() as $newArr)
                foreach($newArr as $value)
                    $queryStr .= $value;   
            $queryStr .= ")";
            echo "<br/>----> Создание таблицы, запрос: ". $queryStr;

            //Удаление данных из таблицы
            $queryDrop = "DROP TABLE ". $arrObj->get_NameTable();
            pg_query($this->get_pgsql(), $queryDrop);

            $qu = pg_query($this->get_pgsql(), $queryStr);

            echo "<br/>----> Вывод результат: <br/>";
            var_dump($qu);
        }
        else
            return false;
    }

    //Добавить данные в таблицу
    public function AddDataTable($arrObj, array $arrData /*int $activateId*/) 
    {
        echo "<br/><br/>-> Проверка интерфейса,перед добавлением: ". $arrObj instanceof InterfaceTables;
        if($arrObj instanceof InterfaceTables)
        {
            //(secondName, firstName, thirdName, age)
            $queryStr = "INSERT INTO ".$arrObj->get_NameTable()." (secondName, firstName, thirdName, age) VALUES (";
            foreach($arrData as $value)
                $queryStr .= $value . ",";
            $queryStr = substr($queryStr, 0, -1);
            $queryStr .= ")";
            echo "<br/>----> Добавление строки данных в таблицу, запрос: <br/>----> ". $queryStr;
            $qu = pg_query($this->get_pgsql(), $queryStr);
            echo "<br/>----> Вывод результат: <br/>";
            var_dump($qu);
        }
        else
            return false;
    }

    //Вывод данных из таблицы
    public function OutPutDataTable(&$arrObj) 
    {
        echo "<br/><br/>-> Проверка интерфейса,перед выводом: ". $arrObj instanceof InterfaceTables;
        echo "<br/>----> Таблица аргумента: ".$arrObj->get_NameTable()."<br/>";
        if($arrObj instanceof InterfaceTables)
        {
            $queryInsp = "SELECT * FROM ".$arrObj->get_NameTable();
            echo "<br/>----> Запрос: " .$queryInsp;
            $qu = pg_query($this->get_pgsql(), $queryInsp) or die('Ошибка запроса: ' . pg_last_error());
            //$result = pg_query_params($this->get_pgsql(), 'SELECT * FROM Test1');
            
            //echo"<br/>----> Вывод чистой объектов:<br/>";
            //$arrObj = pg_fetch_object($qu);
            //echo "<br/>----><br/>";
            //while ($arrObj  = pg_fetch_object($qu,null,PGSQL_ASSOC)) {
             //   echo $arrObj->get_firstName()." ";
             //   echo $arrObj->get_secondName() ." ";
             //   echo $arrObj->get_thirdName() ." [ ";
             //   echo $arrObj->get_age()." ]<BR/>";
            //     }
            //var_dump(pg_fetch_object($qu));

            //echo "<br/>----> Вывод массива: <br/>";
            //var_dump($arrObj);

            echo "<br/>----> Просто проверка вывода в виде массива: <br/>";
            //var_dump($this->get_pgsql());
            $result = pg_query($this->get_pgsql(),$queryInsp) or die('Ошибка запроса: ' . pg_last_error());

            $resultArrObj = array();
           // $useName = $arrObj->get_NameClass();

            while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                //var_dump($line);
                $newClassName = $arrObj->get_NameClass();
                //echo "<br/>" . $arrObj->get_NameClass();
                //echo "<br/>" . $newClassName;

                $controller = new $newClassName;
                echo "<br/>" .$controller->get_NameTable();
                //count($a)
                for($i = 0; $i < count($line); $i++)
                {
                    $arrMethod = "set_".$arrObj->get_GreqteQuery()[$i][0];
                    echo "<br/>" . $arrMethod;
                    $controller->$arrMethod($line[$i]);
                }
                array_push($resultArrObj, $controller);
                var_dump($controller);
                //$newMethod = 
                //foreach ($line as $col_value) {
                //    echo "<br/>".$col_value;
                //}
            }

            var_dump($resultArrObj);
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