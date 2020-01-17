<?php
namespace WorkWithBD\InterfacesBD\InterfaceTables;

interface InterfaceTables
{
    static public function get_GreqteQuery() : array;

    static public function get_NameTable() : string;

    static public function get_NameClass();

    public function set_id(int $_id);

    public function get_id() : int;
}

?>