<?php

include 'ValueListChecker.php';
include 'ActionCounter.php';

function what_list_am_i_on(array $actions): string {
    $naughtyChecker = new ValueListChecker(['b', 'f', 'k']);
    $niceChecker = new ValueListChecker(['g', 's', 'n']);
    
    $naughtyCounter = new ActionCounter;
    $niceCounter = new ActionCounter;
  
    foreach ($actions as $action) {
        $start = substr($action, 0, 1);

        if ($naughtyChecker->exists($start)) {
            $naughtyCounter->increment();
        }

        if ($niceChecker->exists($start)) {
            $niceCounter->increment();
        }
    }
    
    if ($naughtyCounter->getValue() >= $niceCounter->getValue()) {
        return 'naughty';
    }
    
    return 'nice';
  }