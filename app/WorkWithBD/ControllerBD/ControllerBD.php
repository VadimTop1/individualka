<?php
namespace WorkWithBD\ControllerBD;

final class ControllerBD {

    private $host;

    private $dbname;

    private $user;

    private $password;

    private $workConnection;

    public function __construct(string $_host , string $_dbname , string $_user , string $_password)
    {
        $this->host = $_host;
        $this->dbname = $_dbname;
        $this->user = $_user;
        $this->password = $_password;
        $this->workConnection = 0;
    }

	public function Connecting() 
	{
        if($this->workConnection == 0)
        {
            //"host=ec2-174-129-33-107.compute-1.amazonaws.com dbname=d2vsnkphe5a3oj user=rtokoowoircggm password=7b7b20b8a7e3719a92a0f789626bfcd89b12e39de5e69bef5e706717a99eab24"
            $pgsql_conn = pg_connect("host=".$this->host." dbname=".$this->dbname." user=".$this->user." password=".$this->password)
            or die('Не удалось соединиться: ' . pg_last_error());

            if ($pgsql_conn) 
            {
                $this->workConnection = 1;
                return $pgsql_conn;
            }
            else
            {
                echo "Bad connect :(";
                print pg_last_error($pgsql_conn);
            }
            
        }

        return false;
    }
    
    public function get_host(): string
    {
        return $this->host;
    }

    public function get_dbname(): string
    {
        return $this->dbname;
    }

    public function get_user(): string
    {
        return $this->user;
    }

    public function get_password(): string
    {
        return $this->password;
    }

    public function get_workConnection(): int
    {
        return $this->workConnection;
    }
    
}

?>