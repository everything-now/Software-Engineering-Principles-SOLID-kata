<?php

include 'NodeList.php';

function loop_size(Node $node) {

    $nodeList = new NodeList;

    while ($node && !$nodeList->itemExists($node)) {
        $nodeList->setItem($node);
        $node = $node->getNext();
    }

    return $nodeList->getCountItems() - $nodeList->getItemSequenceNumber($node);
}