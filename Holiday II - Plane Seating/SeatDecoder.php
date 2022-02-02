<?php

class SeatDecoder
{
    /**
     * Seat
     *
     * @var SeatInterface
     */
    protected $seat;

    /**
     * 
     */
    const SECTION_VALUES = [
        'Front' => [
            'min' => 1,
            'max' => 20
        ],
        'Middle' => [
            'min' => 21,
            'max' => 40
        ],
        'Back' => [
            'min' => 41,
            'max' => 60
        ],
    ];

    /**
     * 
     */
    const CLUSTER_VALUES = [
        'Left' => ['A', 'B', 'C'],
        'Middle' => ['D', 'E', 'F'],
        'Right' => ['G', 'H', 'K'],
    ];

    /**
     * Class consructor
     *
     * @param SeatInterface $seat
     */
    public function __construct(SeatInterface $seat)
    {
        $this->seat = $seat;
    }

    /**
     * Decode to text value
     *
     * @return string
     */
    public function toTextValue()
    {
        $section = '';
        $cluster = '';

        foreach (self::SECTION_VALUES as $sectionValue => $range) {
            if ($this->seat->getNumber() >= $range['min'] && $this->seat->getNumber() <= $range['max']) {
                $section = $sectionValue;
            }
        }

        foreach (self::CLUSTER_VALUES as $clusterValue => $range) {
            if (in_array($this->seat->getLetter(), $range)) {
                $cluster = $clusterValue;
            }
        }

        if (!$section || !$cluster) {
            return  'No Seat!!';
        }

        return "$section-$cluster";
    }
}