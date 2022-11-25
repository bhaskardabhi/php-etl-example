<?php
namespace Input;

use League\Csv\Reader;
use League\Csv\Statement;

class CSV extends Base{
    /**
     * Converting CSV to array of associative array
     * [
     *      [name, age, location],
     *      [Miriam Konopelski, 41, Frisco],
     *      [Natalie Moore, 67, New Stephanyburgh],
     *      ......
     * ]
     * Converts to
     * [['name' => 'Miriam Konopelski','age' => 41, 'location' => 'Frisco'],.........]
     * 
     */
    public function extract() : array{
        $reader = Reader::createFromPath($this->getSource(), 'r');
        $data = [];
        $headers = [];
        foreach ($reader->getRecords() as $index => $record) {
            if($index == 0){
                $headers = $record;
            } else {
                $row = [];
                foreach($record as $i => $value){
                    $row[$headers[$i]] = $value;
                }
                $data[] = $row;
            }
        }

        return $data;
    }
}