<?php
namespace Transformers;

class SalaryTransformer extends Base{
    public function transform() : array{
        $data = $this->getData();


        foreach($data as $index => $current){
            $data[$index]['random number'] = rand(100, 100000);
        }

        return $data;
    }
}