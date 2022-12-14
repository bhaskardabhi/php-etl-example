<?php
namespace Input;

class JSON extends Base{
    /**
     * Converting JSON to array of associative array
     */
    public function extract() : array{
        return (array) json_decode(file_get_contents($this->getSource()),true);
    }
}