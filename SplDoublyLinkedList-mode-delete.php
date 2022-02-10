<?php
$dll = new \SplDoublyLinkedList();

$dll->setIteratorMode(\SplDoublyLinkedList::IT_MODE_DELETE);

$dll->push("laranja");
$dll->push("banana");
$dll->push("limão");
$dll->push("maçã");
$dll->push("uva");
$dll->push("abacaxi");

foreach ($dll as $value) {
    echo $value."\n";
    echo "Tamanho atual: ".$dll->count();
}
echo "Tamanho atual: ".$dll->count();