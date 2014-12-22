<?php

namespace MASNathan\Database4all\Mysql\Drivers;
use MASNathan\Database4all\DatabaseInterface;
use MASNathan\Database4all\Mysql\Configuration;

class PdoDatabase
    implements DatabaseInterface
{

    /**
     * Database holder
     * @var \PDO
     */
    protected $database;

    /**
     * PDO Database Connection initialization method
     * @param Configuration $config
     */
    public function __construct(Configuration $config)
    {
        $connectionString = sprintf("mysql:host=%s;dbname=%s", $config->host, $config->name);
        $connectioOptions = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $config->charset);
        $this->database = new \PDO($connectionString, $config->user, $config->pass, $connectioOptions);
        /**
         * @todo  Check if connection is ok
         */
    }

    /**
     * Executes a query
     * @param  string $sql SQL query
     * @return boolean     True if successful, False if not
     */
    public function execute($sql)
    {

    }
    
    /**
     * Executes a bunch of querys
     * @param  string $sql SQL query
     * @return boolean     True if successful, False if not
     */
    public function executeMultiple($sql)
    {

    }
    
    /**
     * Executes the querys on a file
     * @param  string $filepath File location
     * @return boolean          True if successful, False if not
     */
    public function executeFile($filepath)
    {

    }

    /**
     * Executes a query returning it's values
     * @param  string $sql SQL [SELECT] query
     * @return Result
     */
    public function query($sql)
    {

    }

    /**
     * Returns the last error code
     * @return string Error code
     */
    public function getLastErrorCode()
    {

    }

    /**
     * Returns the last error message
     * @return string Error message
     */
    public function getLastErrorMessage()
    {

    }

    /**
     * Returns the last inserted ID
     * @return integer Last Inserted ID
     */
    public function getLastInsertId()
    {

    }
}