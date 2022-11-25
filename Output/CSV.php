<?php
namespace Output;

use League\Csv\Writer;

class CSV extends Base{
    public function save(){
        $data = $this->getData();

        // We create the CSV into memory
        $csv = Writer::createFromFileObject(new SplTempFileObject());
        
        if(count($data)){
            $csv->insertOne(array_keys($data[0]));
        }
        
        foreach($data as $index => $current){
            $csv->insertOne($current);
        }

        $csv->output($this->getOutputDestination());

        return true;
    }
}