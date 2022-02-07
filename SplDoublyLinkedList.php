<?php

// continue https://youtu.be/JA2kBhByJMM?t=1233

$dll =  new \SplDoublyLinkedList();

$dll->push("Laranja");
$dll->push("banana");
$dll->push("coco");
$dll->push("limao");
$dll->push("cereja");

//behavior for learn
//$dll->unshift("novidade"); insert node in begin
//$dll->push("final"); insert node in final
//$dll->add(1, 2); to study
//$dll->offsetUnset(1);// to study
//$dll->pop(); remove the last item
//$dll->shift(); remove the first item


echo "Cabeça: ".$dll->bottom()."\n";
echo "Calda: ".$dll->top()."\n";

$dll->rewind();
$prev = null;

while($dll->valid()){
    $current = $dll->current();
    echo "Anterior: ".$prev."\n";
    echo "Atual: ".$current."\n";
    $prev = $current;
    $dll->next();
    $next = $dll->current();
    echo "Próximo: ".$next."\n";

}



