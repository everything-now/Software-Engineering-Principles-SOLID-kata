<?php

include 'ValueExistsInterface.php';

class ValueListChecker implements ValueExistsInterface
{
    /**
     * List of values
     *
     * @var array
     */
    protected $list;

    /**
     * Class constructor
     *
     * @param array $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * Check value exists
     *
     * @param string $value
     * @return bool
     */
    public function exists(string $value) : bool
    {
        return in_array($value, $this->list);
    }
}
