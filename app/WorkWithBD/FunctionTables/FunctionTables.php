<?php
namespace WorkWithBD\FunctionTables;

abstract class FunctionTables
{
    abstract static public function get_NameClass();

    abstract static public function get_NameMethodClass() : array;

    abstract static public function get_NameTable() : string;
}

?>