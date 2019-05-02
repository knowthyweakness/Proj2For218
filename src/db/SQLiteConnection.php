<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/18/2019
 * Time: 11:53 AM
 */
namespace knowthyweakness\db;

class SQLiteConnection {
    /**
     * PDO instance
     * @var type
     */
    private $pdo;

    /**
     * return in instance of the PDO object that connects to the SQLite database
     * @return \PDO
     */
    public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE);
        }
        return $this->pdo;
    }
}