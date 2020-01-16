<?php
namespace WorkWithBD\InterfacesBD\InterfaceTables;

interface InterfaceTables
{
    static public function get_NameMethodClass() : array;

    static public function get_NameTable() : string;

    public function set_id(int $_id);

    public function get_id() : int;
}

?>