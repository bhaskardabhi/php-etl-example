<?php
namespace Input;

abstract class Base{
    private $source;
    private array $data;

    public function __construct($source = null){
        $this->source = $source;
    }
    
    /**
     * Wrapper to retrive the data
     * It call the subclass's `extract` abstract method and return the data
     */
    public function getData(){
        if(is_null($this->data)){
            $this->data = $this->extract();
        }

        return $this->data;
    }

    public function getSource(){
        return $this->source;
    }

    /***
     * Extract data from the input type
     * The output should be array of associative array
     * [
     *      ['name' => 'Bhaskar', 'age' => 30, 'location' => 'Bhuj'],
     *      ['name' => 'John', 'age' => 40, 'location' => 'Berlin'],
     *      ['name' => 'Stuart', 'age' => 50, 'location' => 'Tokyo'],
     * ]
     */
    abstract public function extract() : array;
}