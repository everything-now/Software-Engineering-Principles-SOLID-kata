<?php

include 'CountInterface.php';

class ActionCounter implements CountInterface
{
    /**
     * Counter value
     *
     * @var int
     */
    protected $value;

    /**
     * Increment value
     *
     * @return void
     */
    public function increment()
    {
        $this->value++;
    }

    /**
     * Get value
     *
     * @return int
     */
    public function getValue() : int
    {
        return (int) $this->value;
    }
}
