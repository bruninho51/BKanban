<?php

namespace Services\Infraestructure\RowDataGateway;

class TasksGateway {

    private static $con;

    public static function setConnection(PDO $con)
    {
        self::$con = $con;
    }

    public function find($id, $class = 'stdClass') {
        $sql = 'SELECT * FROM tasks where id = ' . $id;
        $result = self::$con->query($sql);

        return $result->fetchObject($result, $class);
    }

    public function all($filter, $class = 'stdClass')
    {
        $sql = "SELECT * FROM tasks ";
        if ($filter) {
            $sql .= "where $filter";
        }

        $result = self::$con->query($sql);
        return $result->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM tasks WHERE id = ' . $id;

        return self::$con->query($sql);
    }

    public function save($data)
    {
        if (empty($data->id)) {
            $id = $this->getLastId() + 1;
            $sql = 'INSERT INTO tasks(id, name, decription, user) VALUES(' . $id . ', ' . 
                        $data->name . ', ' . 
                        $data->description . ', ' .
                        $data->user . ')';

        } else {
            $sql = 'UPDATE tasks SET name = ' . $data->name . 
                        ', description = ' . $data->description . 
                        ', user = ' . $data->user . 
                        ' WHERE id = ' . $data->id;
        }

        return self::$con->exec($sql);
    }

    public function getLastId()
    {
        $sql = 'SELECT max(id) AS max FROM tasks';
        $result = self::$con->query($sql);
        $data = $result->fetch(PDO::FETCH_OBJ);

        return $data->max;
    }
}