<?php

namespace CarMaster\Exceptions;

use Exception;

class InvalidSizeTire extends Exception
{
    public function __construct($message = "Invalid Size Tire")
    {
        parent::__construct($message);
    }

}