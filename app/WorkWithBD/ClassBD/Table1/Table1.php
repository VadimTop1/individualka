<?php
namespace WorkWithBD\ClassBD\Table1;

use  WorkWithBD\InterfacesBD\InterfaceTables\InterfaceTables;

class Table1 implements InterfaceTables
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $secondName;

    /** @var string */
    protected $thirdName;

    /** @var int */
    protected $age;

    /**
     * @return array
     **/
    static public function get_GreqteQuery() : array
    {
        //$array = array("firstName", "secondName", "thirdName", "age");
        return [
            "`id` SERIAL PRIMARY KEY,",
            "`firstName` CHARACTER VARYING(30),",
            "`secondName` CHARACTER VARYING(30),",
            "`thirdName` CHARACTER VARYING(30),",
            "`age`"
        ];
    } 
    
    /**
     * @return string
     **/
    static public function get_NameTable() : string
    {
        return "Table1";
    }  


    /**
     * @param int $_id
     * @return int
     **/
    public function set_id(int $_id)
    {
        $this->id = $_id;
    }

    /**
     * @param string $_firstName
     * @return string
     **/
    public function set_firstName(string $_firstName)
    {
        $this->firstName = $_firstName;
    }

    /**
     * @param string $_secondName
     * @return string
     **/
    public function set_secondName(string $_secondName)
    {
        $this->secondName = $_secondName;
    }

    /**
     * @param string $_thirdName
     * @return string
     **/
    public function set_thirdName(string $_thirdName)
    {
        $this->thirdName = $_thirdName;
    }

    /**
     * @param int $_age
     * @return int
     **/
    public function set_age(int $_age)
    {
        $this->age = $_age;
    }

    /**
     * @return int
     **/
    public function get_id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     **/
    public function get_firstName() : string
    {
        return $this->firstName;
    }

    /**
     * @return string
     **/
    public function get_secondName(): string
    {
        return $this->secondName;
    }

    /**
     * @return string
     **/
    public function get_thirdName() : string
    {
        return $this->thirdName;
    }

    /**
     * @return int
     **/
    public function get_age() : int
    {
        return $this->age;
    }


}

?>