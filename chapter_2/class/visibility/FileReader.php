<?php

class FileReader
{
    private $data = 'Some random data';

    public $dataPublic = 'Some random public data';

    public function getData()
    {
        return $this->data;
    }
}