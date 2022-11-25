<?php

use League\Csv\Reader;
use League\Csv\Statement;

class CSV extends Base{
    public function extract() : array{
        $reader = Reader::createFromPath($this->getSource(), 'r');
        $data = [];
        foreach ($reader->getRecords() as $index => $record) {
            $data[] = $reader;
        }

        return $data;
    }
}