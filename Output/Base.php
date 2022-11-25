<?php
namespace Output;

abstract class Base{
    private $outputDestination;
    private $data;

    public function __construct($outputDestination = null){
        $this->outputDestination = $outputDestination;
    }

    public function getData() : array {
        return $this->data;
    }

    public function getOutputDestination() {
        return $this->outputDestination;
    }

    abstract public function save() : bool;
}