<?php

$pgsql_conn = pg_connect("host=ec2-174-129-33-107.compute-1.amazonaws.com dbname=d2vsnkphe5a3oj user=rtokoowoircggm password=7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24")
    or die('Не удалось соединиться: ' . pg_last_error());

$table;
$strTable = "
CREATE TABLE customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(30),
    LastName CHARACTER VARYING(30),
    Email CHARACTER VARYING(30),
    Age INTEGER
);";

if ($pgsql_conn) {
    echo "Успешно подключились к : " . pg_host($pgsql_conn) . "<br/>\n";
    $query = "show databases like 'customers' ";
    $result = pg_query($query) or die("Нету таблицы");//die('Ошибка запроса: ' . pg_last_error());
    echo $result;
    if($result != null)
        echo "Таблица существует";
    else
    {
        //echo "Нету таблицы";
        $table=pg_query($pgsql_conn, $strTable);
    //pg_close($dbconn);
    }
    
} else {
    echo "Bad connect :(";
    print pg_last_error($pgsql_conn);
    exit;
}

?>