<?php
/**
 * Created by IntelliJ IDEA.
 * User: aschulz1
 * Date: 24.01.15
 * Time: 12:13
 * To change this template use File | Settings | File Templates.
 */

class DatabaseDao {

    function __construct($dbhost, $dbname, $dbuser, $dbpass)
    {
        try {
            $this->db_handle = new PDO(
                'mysql:dbname='.$dbname.';host='.$dbhost, $dbuser, $dbpass
            );
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


}