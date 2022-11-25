<?php
namespace Output;

class JSON extends Base{
    public function save(){
        $data = $this->getData();

        return file_put_contents($this->getOutputDestination(), json_encode($data));
    }
}