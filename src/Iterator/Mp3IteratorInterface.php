<?php
interface Mp3IteratorInterface 
{
    public function hasNext(): bool;
    public function hasPrevious(): bool;

    public function next();
    public function previous();
}
