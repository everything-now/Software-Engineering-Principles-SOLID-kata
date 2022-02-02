<?php

include 'Seat.php';
include 'SeatDecoder.php';

$seat = new \Seat('23K');
$decoder = new SeatDecoder($seat);
$decoder->toTextValue();
