<?php
namespace WorkWithBD\ClassBD\Table1;

class Table1
{
    /** @var string */
    protected $firstName;

    /** @var string */
    protected $secondName;

    /** @var string */
    protected $thirdName;

    /** @var int */
    protected $age;


    /**
     * @return string
     **/
    public function get_NameTable() : string
    {
        return self::class;
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