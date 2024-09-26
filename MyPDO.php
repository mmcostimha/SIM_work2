<?php

class MyPDO extends PDO{

    public function __construct()

    {

        $dns = 'mysql:host=localhost;port=3306;dbname=sim';

        parent::__construct($dns, 'root', 'Marcio123.');

        $this ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  

    }

}