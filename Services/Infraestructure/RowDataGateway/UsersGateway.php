<?php

namespace Services\Infraestructure\RowDataGateway;

class UsersGateway {

    private static $con;

    public static function setConnection(PDO $con)
    {
        self::$con = $con;
    }

    public function find($id, $class = 'stdClass') {
        $sql = 'SELECT * FROM users where id = ' . $id;
        $result = self::$con->query($sql);

        return $result->fetchObject($result, $class);
    }

    public function all($filter, $class = 'stdClass')
    {
        $sql = "SELECT * FROM users ";
        if ($filter) {
            $sql .= "where $filter";
        }

        $result = self::$con->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM users WHERE id = ' . $id;

        return self::$con->query($sql);
    }

    public function save($data)
    {
        if (empty($data->id)) {
            $id = $this->getLastId() + 1;
            $sql = 'INSERT INTO users(id, name) VALUES(' . $id . ', ' . $data->name . ')';
        } else {
            $sql = 'UPDATE users SET name = ' . $data->name . " WHERE id = " . $data->id;
        }

        return self::$con->exec($sql);
    }

    public function getLastId()
    {
        $sql = 'SELECT max(id) AS max FROM users';
        $result = self::$con->query($sql);
        $data = $result->fetch(PDO::FETCH_OBJ);

        return $data->max;
    }
}