<?php

abstract class Base{
    private $source;
    private array $data;

    public function __construct($source = null){
        $this->source = $source;
    }

    public function getData(){
        if(is_null($this->data)){
            $this->data = $this->extract();
        }

        return $this->data;
    }

    public function getSource(){
        return $this->source;
    }

    // Child method to extract data from the source
    abstract public function extract() : array;

}