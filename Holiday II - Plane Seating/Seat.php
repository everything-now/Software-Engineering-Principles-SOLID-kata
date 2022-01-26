<?php

include 'SeatInterface.php';

class Seat implements SeatInterface
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getNumberValue()
    {
        return intval($this->value);
    }

    public function getLetterValue()
    {
        return str_replace($this->getNumberValue(), '', $this->value);
    }
}
