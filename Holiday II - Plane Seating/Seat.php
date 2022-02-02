<?php

include 'SeatInterface.php';

class Seat implements SeatInterface
{
    protected $value;

    /**
     * Class constructor
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Get number value
     *
     * @return int
     */
    public function getNumber() : int
    {
        return intval($this->value);
    }

    /**
     * Get letter value
     *
     * @return string
     */
    public function getLetter() : string
    {
        return str_replace($this->getNumber(), '', $this->value);
    }
}
