<?php

namespace Services\Domain;

use Services\Infraestructure\RowDataGateway\UsersGateway;
use Services\Infraestructure\Connection;

class User {
    private static $con;
    private $data;

    public function __get($property)
    {
        return $this->data[$property];
    }

    public function __set($property, $value)
    {
        $this->data[$property] = $value;
    }

    public static function find($id)
    {
        $gw = new UsersGateway(Connection::get());
        return $gw->find($id, __CLASS__);
    }

    public static function all($filter = '')
    {
        $gw = new UsersGateway(Connection::get());
        return $gw->all($find, __CLASS__);
    }

    public function delete()
    {
        $gw = new UsersGateway(Connection::get());
        return $gw->delete($this->id);
    }

    public function save()
    {
        $gw = new UsersGateway(Connection::get());
        return $gw->save((object) $this->data);
    }
}