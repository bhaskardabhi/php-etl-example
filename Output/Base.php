<?php
namespace Output;

abstract class Base{
    private array $data = [];

    public function __construct($data = null){
        $this->data = $data;
    }

    public function getData() : array {
        return $this->data;
    }

    abstract public function save($destination) : bool;
}