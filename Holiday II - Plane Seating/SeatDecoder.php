<?php

class SeatDecoder
{
    protected $seat;

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

    const CLUSTER_VALUES = [
        'Left' => ['A', 'B', 'C'],
        'Middle' => ['D', 'E', 'F'],
        'Right' => ['G', 'H', 'K'],
    ];

    public function __construct(SeatInterface $seat)
    {
        $this->seat = $seat;
    }

    public function toTextValue()
    {
        $section = '';
        $cluster = '';

        foreach (self::SECTION_VALUES as $sectionValue => $range) {
            if ($this->seat->getNumberValue() >= $range['min'] && $this->seat->getNumberValue() <= $range['max']) {
                $section = $sectionValue;
            }
        }

        foreach (self::CLUSTER_VALUES as $clusterValue => $range) {
            if (in_array($this->seat->getLetterValue(), $range)) {
                $cluster = $clusterValue;
            }
        }

        if (!$section || !$cluster) {
            return  'No Seat!!';
        }

        return "$section-$cluster";
    }
}