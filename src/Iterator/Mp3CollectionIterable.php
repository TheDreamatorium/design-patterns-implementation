<?php
interface Mp3CollectionIterable
{
    public function createIterator(): Mp3IteratorInterface;
}
