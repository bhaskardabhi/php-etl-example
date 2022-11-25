<?php
namespace Output;

class JSON extends Base{
    public function save($destination) : bool{
        $data = $this->getData();

        file_put_contents($destination, json_encode($data));

        return true;
    }
}