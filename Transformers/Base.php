<?php
namespace Transformers;

abstract class Base{
    private $transformedData;
    private static $registory = [];
    private $magicMethodPrefix = "saveAs";
    private $source;

    public function __construct($source = null){
        $this->source = $source;
    }

    /**
     * Notice: We are considering that Transformers will have logic to transform the data. 
     * Meaning that input that you pass to him will be known to the transform
     */
    abstract public function transform() : array;

    /**
     * This method will retrive the class from the registory and will call it's save method
     * Kind of call the output class to tell him to save
     */
    private function save($destionation, $args){
        $this->transformedData = $this->transform();
        
        return (new $registory[$method]($this->transformedData))->save($args);
    }

    public function register($type, $class){
        self::$registory[$type] = $class;

        return self;
    }

    /**
     * we have saveAs{Type}() method to save as output
     * Example: saveAsJSON, saveAsCSV etc
     * Magic method will call the save method internally to save the data
     */
    public function __call($method, $args)
	{
        $magicMethodPrefixLength = strlen($this->magicMethodPrefix);
		if (substr($method, 0, $magicMethodPrefixLength) === $this->magicMethodPrefix) {
			throw new \BadMethodCallException();
		}

        $method = substr($method, $magicMethodPrefixLength, strlen($method) - $magicMethodPrefixLength);

        if (!isset($registory[$method])) {
			throw new \BadMethodCallException("Method not registered");
		}

		return $this->save($method, $args);
	}
}